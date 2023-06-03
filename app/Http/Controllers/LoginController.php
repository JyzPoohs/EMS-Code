<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginUser(Request $request)
    {
        $request->validate([
            'role' => 'required',
            'ic' => 'required',
            'password' => 'required|min:6|max:12'
        ]);


        if ($request->role == 'user') {
            if (Auth::guard('web')->attempt(['ic' => $request->ic, 'password' => $request->password])) {
                $request->session()->regenerate();
                return redirect()->route('user.profile')->with('success', 'You\'re logged in');
            }
        } elseif ($request->role == 'staff') {
            if (Auth::guard('staff')->attempt(['ic' => $request->ic, 'password' => $request->password])) {
                $request->session()->regenerate();
                $staff = Auth::guard('staff')->user();
                if ($staff->accessCategory == 'ADMINISTRATOR') {
                    return redirect()->route('staff.admin.profile');
                } elseif ($staff->accessCategory == 'STAFF') {
                    return redirect()->route('staff.profile');
                }
            }
        }

        return back()->withErrors([
            'fail' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login/user');
    }
}
