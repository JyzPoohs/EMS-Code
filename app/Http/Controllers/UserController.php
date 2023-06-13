<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Display user profile page
    public function profile()
    {
        $user = User::find(auth()->user()->id);

        return view('manageUserProfile.profile-view', compact('user'));
    }

    //To update the edited user profile 
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email,',
            'name' => 'required|string',
        ],
        [
            'email.unique' => 'The email has been registered',
            'name.required' => 'The name cannot be empty'
        ]
    );

        User::find($id)->update($request->all());

        return back()->with('success', 'Profile updated successfully.');
    }

    //Below are functions for staff to manage user profile

    //For staff to show the user profile list
    public function userProfileList()
    {
        $users = User::orderBy('created_at', 'desc')->get();

        return view('manageUserProfile.userProfileList-view', compact('users'));
    }

    //For staff to view the selected user profile 
    public function profileView($id)
    {
        $user = User::find($id);

        return view('manageUserProfile.viewUserProfile-view', compact('user'));
    }

    //For staff to view the selected user profile for editing
    public function profileUpdateView($id)
    {
        $user = User::find($id);

        return view('manageUserProfile.editUserProfile-view', compact('user'));
    }

    //For staff to update the selected user profile 
    public function profileUpdate(Request $request, $id)
    {
        $request->validate([
            'ic' => 'required|unique:users,ic,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            'name' => 'required|string',
            'gender' => 'required',
            'phone' => 'required',
        ]);

        $user = User::findOrFail($id);

        $user->update($request->all());

        return back()->with('success', 'Profile updated successfully.');
    }

    //For staff to delete the selected user profile 
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->route('staff.userProfileList')->with('delete', 'Selected user profile deleted successfully');
    }
}
