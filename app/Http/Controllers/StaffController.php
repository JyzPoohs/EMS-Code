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
                'ic' => 'required|unique:users|max:12',
                'name' => 'required',
                'role' => 'required',
                'department' => 'required',
                'accessCategory' => 'required',
                'position' => 'required',
                'paid' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|max:12',
                'cpassword' => 'required|same:password'
            ],
            [
                'cpassword.same' => 'The password must be same'
            ]
        );
        $staff = new Staff();
        $staff->ic = $request->ic;
        $staff->name = $request->name;
        $staff->role = $request->role;
        $staff->department = $request->department;
        $staff->accessCategory = $request->accessCategory;
        $staff->position = $request->position;
        $staff->paid = $request->paid;
        $staff->email = $request->email;
        $staff->password = Hash::make($request->password);
        $res = $staff->save();

        if ($res) {
            return redirect()->back()->with('success', 'Registered success');
        } else {
            return redirect()->back()->with('fail', 'Registered fail');
        }

        // $request->merge([
        //     'password' => bcrypt('password')
        // ]);

        // User::create($request->all());

        // return redirect()->route('user.index')
        //     ->with('success', "User Successfully Added");
    }
}
