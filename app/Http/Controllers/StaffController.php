<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Staff;

class StaffController extends Controller
{
    // Show the profile of the authenticated staff
    public function profile()
    {
        $staff = Staff::find(auth()->user()->id);

        return view('manageStaffProfile.profile-view', compact('staff'));
    }

    // Update the profile of a staff
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email|unique:staffs,email,' . $id,
            'name' => 'required|string',
        ],
        [
            'name.required' => 'The name cannot be empty'
        ]
    );

        Staff::find($id)->update($request->all());

        return back()->with('success', 'Profile updated successfully.');
    }

    // Show the view of a staff's profile
    public function profileView($id)
    {
        $user = Staff::find($id);

        return view('manageStaffProfile.viewStaffProfile-view', compact('user'));
    }

    // Show the edit view for a staff's profile
    public function profileUpdateView($id)
    {
        $user = Staff::find($id);

        return view('manageStaffProfile.editStaffProfile-view', compact('user'));
    }

    // Update a staff's profile
    public function profileUpdate(Request $request, $id)
    {
        $request->validate([
            'ic' => 'required|digits_between:12,12|unique:staffs,ic,' . $id,
            'email' => 'required|email|unique:staffs,email,' . $id,
            'name' => 'required|string',
        ]);

        $user = Staff::findOrFail($id);

        if ($request->requestStatus === 'PENDING' || $request->requestStatus === 'REJECT') {
            // Send an email notification for registration status
            Mail::send('manageRegister.email-view', ['requestStatus' => $request->status], function ($message) use ($request) {
                $message->to($request->input('email'));
                $message->subject('Registration Status');
            });
        }

        $user->update($request->all());

        return back()->with('success', 'Profile updated successfully.');
    }

    // Show a list of staff profiles
    public function staffProfileList()
    {
        $users = Staff::orderBy('created_at', 'desc')->paginate(10);

        return view('manageStaffProfile.staffProfileList-view', compact('users'));
    }

    // Delete a staff profile
    public function destroy($id)
    {
        Staff::find($id)->delete();

        return redirect()->route('staff.staffProfileList')->with('delete', 'Selected staff profile deleted successfully');
    }
}
