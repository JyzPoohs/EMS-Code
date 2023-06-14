<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Staff;

class RegisterController extends Controller
{
    public function createUser(Request $request)
    {
        //Validate all user registration info
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

        //If the password is same with repeat password
        if ($request->cpassword === $request->password) {
            // Create a new User instance
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

        return back()->with('fail', 'Registration is failed. Ensure your info are correct');
    }

    public function createStaff(Request $request)
    {
        $request->validate(
            [
                'ic' => 'required|digits_between:12,12|unique:staffs',
                'name' => 'required',
                'department' => 'required',
                'accessCategory' => 'required',
                'position' => 'required',
                'paid' => 'required',
                'email' => 'required|email|unique:staffs',
                'password' => 'required|min:6|max:12',
                'cpassword' => 'required|min:6|max:12|same:password',
            ],
            [
                'ic.required' => 'The IC field is required.',
                'ic.digits_between' => 'The IC must be exactly 12 digits.',
                'ic.unique' => 'The IC No. has been registered.',
                'cpassword.required' => 'The repeat password field is required.',
                'cpassword.min' => 'The repeat password must be at least 6 characters.',
                'cpassword.max' => 'The repeat password may not be greater than 12 characters.',
                'cpassword.same' => 'The password and repeat password must match.',
            ]
        );

        //If the password is same with repeat password
        if ($request->cpassword === $request->password) {
            // Create a new Staff instance
            $staff = new Staff();
            $staff->ic = $request->ic;
            $staff->name = $request->name;
            $staff->role = 'staff';
            $staff->department = $request->department;
            $staff->accessCategory = $request->accessCategory;
            $staff->position = $request->position;
            $staff->paid = $request->paid;
            $staff->email = $request->email;
            $staff->password = $request->password;
            $staff->status = 'PENDING';
            $staff->save();

            return redirect()->route('staff.registerMessage');
        }

        return back()->with('fail', 'Registration is failed. Ensure your info are correct');
    }

    //Check whether the access code is correct
    public function validateCode(Request $request)
    {
        $request->validate([
            'code' => 'required'
        ]);

        if (strtoupper($request->code) === 'CODE')
            return redirect()->route('staff.register');
        else
            return redirect()->route('staff.accessCode')->with('fail', 'The access code is incorrect.');
    }
}
