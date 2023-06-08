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

    //To register user account
    public function create(Request $request)
    {
        $request->validate(
            [
                'ic' => 'required|digits_between:12,12|unique:users',
                'name' => 'required',
                'gender' => 'required',
                'phone' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|max:12',
                'cpassword' => 'required|min:6|max:12|same:password',
            ],
            [
                'ic.required' => 'The IC field is required.',
                'ic.digits_between' => 'The IC must be exactly 12 digits.',
                'ic.unique' => 'The IC No. has been registered.',
                'gender.required' => 'Please select a gender.',
                'cpassword.required' => 'The repeat password field is required.',
                'cpassword.min' => 'The repeat password must be at least 6 characters.',
                'cpassword.max' => 'The repeat password may not be greater than 12 characters.',
                'cpassword.same' => 'The password and repeat password must match.',
            ]
        );

        if ($request->cpassword === $request->password) {
            $user = new User();
            $user->ic = $request->ic;
            $user->name = $request->name;
            $user->gender = $request->gender;
            $user->role = 'user';
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();

            return redirect()->route('user.registerMessage');
        }

        return back()->with('fail', 'Registration is unsuccessful. Ensure your info are correct');
    }

    // public function store(Request $request)
    // {
    //     $request->merge([
    //         'password' => bcrypt('password')
    //     ]);

    //     User::create($request->all());

    //     return redirect()->route('user.index')
    //         ->with('success', "User Successfully Added");
    // }

    //To update the edited user profile 
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email|unique:staffs,email,',
            'name' => 'required|string',
        ]);

        User::find($id)->update($request->all());

        return back()->with('success', 'Profile updated successfully.');
    }

    //Below are functions for staff to manage user profile

    //For staff to show the user profile list
    public function userProfileList()
    {
        $users = User::orderBy('created_at', 'desc')
            ->paginate(10);

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
