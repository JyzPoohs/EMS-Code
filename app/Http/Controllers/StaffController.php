<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Staff;

class StaffController extends Controller
{
    public function profile()
    {
        $staff = Staff::find(auth()->user()->id);

        return view('manageStaffProfile.profile-view', compact('staff'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email|unique:staffs,email,',
            'name' => 'required|string',
        ]);

        Staff::find($id)->update($request->all());

        return back()->with('success', 'Profile updated successfully.');
    }

    public function profileView($id)
    {
        $user = Staff::find($id);

        return view('manageStaffProfile.viewStaffProfile-view', compact('user'));
    }

    public function profileUpdateView($id)
    {
        $user = Staff::find($id);

        return view('manageStaffProfile.editStaffProfile-view', compact('user'));
    }

    public function profileUpdate(Request $request, $id)
    {
        $request->validate([
            'ic' => 'required|digits_between:12,12|unique:staffs,ic,' . $id,
            'email' => 'required|email|unique:staffs,email,' . $id,
            'name' => 'required|string',
        ]);

        $user = Staff::findOrFail($id);

        if($request->requestStatus === 'PENDING' || $request->requestStatus === 'REJECT'){
            Mail::send('manageRegister.email-view', ['requestStatus' => $request->status], function ($message) use ($request) {
                $message->to($request->input('email'));
                $message->subject('Registration Status');
            });

        }

        $user->update($request->all());

        return back()->with('success', 'Profile updated successfully.');
    }

    public function staffProfileList()
    {
        $users = Staff::orderBy('created_at', 'desc')
            ->paginate(10);

        return view('manageStaffProfile.staffProfileList-view', compact('users'));
    }

    public function destroy($id)
    {
        Staff::find($id)->delete();

        return redirect()->route('staff.staffProfileList')->with('delete', 'Selected staff profile deleted successfully');
    }
}
