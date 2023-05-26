<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Hash;
use Session;

class UserAuth extends Controller
{
    public function show()
    {
        return view("auth.login");
    }

    public function userRegister()
    {
        return view("auth.userRegister");
    }

    public function staffRegister()
    {
        return view("auth.staffRegister");
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'ic' => 'required|unique:users|max:12',
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:12'
        ]);
        $user = new User();
        $user->ic = $request->ic;
        $user->name = $request->name;
        $user->gender = $request->gender;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if ($res) {
            return back()->with('success', 'Registered success');
        } else {
            return back()->with('fail', 'Registered fail');
        }
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'ic' => 'required',
            'password' => 'required|min:6|max:12'
        ]);

        $user = User::where('ic', '=', $request->ic)->first();
        // if ($user) {
        //     if (Hash::check($request->password, $user->password)) {
        //         $request->session()->put('loginId', $user->id);
        //         return redirect()->route('user.profile');
        //     }
        // }

        if (Auth::attempt(['ic' => $request->ic, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('user.profile');
            // return redirect()->route('dashboard');
            // if (Auth::user()->role->value == 'user') {
            //     return redirect()->route('user.profile');
            // } else if (Auth::user()->role->value == 'expert') {
            //     return redirect()->intended('dashboard');
            // } else {
            //     return redirect()->intended('dashboard');
            // }
        }

        return back()->withErrors([
            'ic' => 'The provided credentials do not match our records.',
        ]);
    }

    public function profile()
    {
        $data = array();
        if (Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        return view('manageUserProfile.profile', compact('data'));
    }

    // public function logout()
    // {
    //     if (Session::has('loginId')) {
    //         Session::pull('loginId');
    //         return redirect('login');
    //     }
    // }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
