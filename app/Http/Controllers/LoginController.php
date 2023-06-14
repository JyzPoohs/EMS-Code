<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Staff;

class LoginController extends Controller
{
    //To show login page
    public function index()
    {
        return redirect()->route('login');
    }

    //To validate and verify login credentials
    //Based on role, redirect to different profile page
    public function loginUser(Request $request)
    {
        //If login as user
        if ($request->role == 'user') {

            $request->validate(
                [
                    'role' => 'required',
                    'ic' => 'required|digits_between:12,12|exists:users',
                    'password' => 'required|min:6|max:12'
                ],[
                    'ic.exists' => 'The ic is not found'
                ]
            );

            if (Auth::guard('web')->attempt(['ic' => $request->ic, 'password' => $request->password])) {
                $request->session()->regenerate();
                return redirect()->route('user.profile')->with('success', 'You\'re logged in');
            }
        } elseif ($request->role == 'staff') { //Login as a staff

            $request->validate([
                'role' => 'required',
                'ic' => 'required|digits_between:12,12|exists:staffs',
                'password' => 'required|min:6|max:12'
            ]);

            //To check whether the staff account status is allowed to login
            //Status of 'PENDING' and 'REJECT' has no access to system
            $staff = Staff::where('ic', $request->ic)->first();
            if($staff->status === 'PENDING'){
                return back()->withErrors([
                    'fail' => 'Your registration request is still processing.',
                ]);
            }
            elseif($staff->status === 'REJECT'){
                return back()->withErrors([
                    'fail' => 'Your registration request is rejected.',
                ]);
            }

            if (Auth::guard('staff')->attempt(['ic' => $request->ic, 'password' => $request->password])) {
                $request->session()->regenerate();
                return redirect()->route('staff.profile');
            }
        }

        return back()->withErrors([
            'fail' => 'The provided credentials do not match our records.',
        ]);
    }

    //Logout user
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
