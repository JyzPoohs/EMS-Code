<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function showForgotPasswordForm()
    {
        return view('manageLogin.password.forgot-password');
    }

    public function showChangePasswordForm()
    {
        return view('manageLogin.password.change-password');
    }

    //To send the new random generate password 
    public function submitForgotPasswordForm(Request $request)
    {
        if ($request->role === 'staff') {
            $request->validate([
                'ic' => 'required|exists:staffs|max:12',
                'email' => 'required|email|exists:staffs',
            ]);
        } else {
            $request->validate([
                'ic' => 'required|exists:users|max:12',
                'email' => 'required|email|exists:users',
            ]);
        }

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->input('email'),
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        if ($request->role === 'staff') {
            $user = Staff::where('email', $request->input('email'))->first();
        } else {
            $user = User::where('email', $request->input('email'))->first();
        }

        $newPassword = random_int(100000, 999999);
        $user->password = $newPassword;
        $user->save();

        Mail::send('manageLogin.password.email', ['newPassword' => $newPassword], function ($message) use ($request) {
            $message->to($request->input('email'));
            $message->subject('Reset Passowrd');
        });

        return back()->with('reset', 'We have emailed you reset password link');
    }

    //To update the change password
    public function submitChangePasswordForm(Request $request)
    {
        if ($request->role === 'staff') {
            $request->validate([
                'ic' => 'required|exists:staffs',
                'password' => 'required|min:6|max:12',
                'newPassword' => 'required|min:6|max:12',
                'repeatPassword' => 'required|min:6|max:12'
            ]);
        } else {
            $request->validate([
                'ic' => 'required|exists:users',
                'password' => 'required|min:6|max:12',
                'newPassword' => 'required|min:6|max:12',
                'repeatPassword' => 'required|min:6|max:12'
            ]);
        }

        if ($request->role === 'staff') {
            $user = Staff::where('ic', $request->input('ic'))->first();
            
        } else {
            $user = User::where('ic', $request->input('ic'))->first();
        }

        if(!$user){
            return back()->with('reset', 'Change password failed. Ensure your info are correct');
        }

        if (Hash::check($request->password, $user->password)) {
            $user->password = ($request->newPassword);
            $user->save();
        }

        return redirect()->route('login')->with('reset', "Reset Password Success");
    }
}
