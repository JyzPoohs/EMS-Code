<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    public function profile()
    {
        $staff = Staff::find(auth()->user()->id);

        return view('manageStaffProfile.profile', compact('staff'));
    }

    public function create(Request $request)
    {
        $request->validate(
            [
                'ic' => 'required|unique:staffs|max:12',
                'name' => 'required',
                'department' => 'required',
                'accessCategory' => 'required',
                'position' => 'required',
                'paid' => 'required',
                'email' => 'required|email|unique:staffs',
                'password' => 'required|min:6|max:12',
                'cpassword' => 'required|same:password'
            ],
        );

        $staff = new Staff();
        $staff->ic = $request->ic;
        $staff->name = $request->name;
        $staff->role = 'STAFF';
        $staff->department = $request->department;
        $staff->accessCategory = $request->accessCategory;
        $staff->position = $request->position;
        $staff->paid = $request->paid;
        $staff->email = $request->email;
        $staff->password = bcrypt($request->password);
        $staff->status = 'PENDING';
        $staff->save();

        return redirect()->route('staff.registerMessage');
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

        return view('manageStaffProfile.viewStaffProfile', compact('user'));
    }

    public function profileUpdateView($id)
    {
        $user = Staff::find($id);

        return view('manageStaffProfile.editStaffProfile', compact('user'));
    }

    public function profileUpdate(Request $request, $id)
    {
        $request->validate([
            'ic' => 'required|unique:staffs,ic,' . $id,
            'email' => 'required|email|unique:staffs,email,' . $id,
            'name' => 'required|string',
        ]);

        $user = Staff::findOrFail($id);

        $user->update($request->all());

        return back()->with('success', 'Profile updated successfully.');
    }

    public function staffProfileList()
    {
        $users = Staff::orderBy('created_at', 'desc')
            ->paginate(10);

        return view('manageStaffProfile.staffProfileList', compact('users'));
    }

    public function destroy($id)
    {
        Staff::find($id)->delete();

        return redirect()->route('staff.staffProfileList')->with('delete', 'Selected staff profile deleted successfully');
    }
}
