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
        return view('manageLogin.forgot-password-view');
    }

    public function showChangePasswordForm()
    {
        return view('manageLogin.change-password-view');
    }

    // To send the new randomly generated password
    public function submitForgotPasswordForm(Request $request)
    {
        // Validate the input based on the role (staff or user)
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

        // Generate a random token for password reset
        $token = Str::random(64);

        // Insert the password reset record into the database
        DB::table('password_resets')->insert([
            'email' => $request->input('email'),
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        // Retrieve the user based on the role (staff or user)
        if ($request->role === 'staff') {
            $user = Staff::where('email', $request->input('email'))->first();
        } else {
            $user = User::where('email', $request->input('email'))->first();
        }

        // Generate a new random password
        $newPassword = random_int(100000, 999999);

        // Set the random password as new password for the user
        $user->password = $newPassword;
        $user->save();

        // Send an email to the user with the new (random) password
        Mail::send('manageLogin.email-view', ['newPassword' => $newPassword], function ($message) use ($request) {
            $message->to($request->input('email'));
            $message->subject('Reset Password'); //Email Title
        });

        // Redirect back with a success message
        return back()->with('reset', 'We have emailed you a reset password link');
    }


    // To update the change password
    public function submitChangePasswordForm(Request $request)
    {
        // Validate the input based on the role (staff or user)
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

        // Retrieve the user based on the role (staff or user)
        if ($request->role === 'staff') {
            $user = Staff::where('ic', $request->input('ic'))->first();
        } else {
            $user = User::where('ic', $request->input('ic'))->first();
        }

        // Check if the current password matches the user's actual password
        if (Hash::check($request->password, $user->password)) {
            // Set the new password for the user
            $user->password = $request->newPassword;
            $user->save();
        }

        // Redirect to the login page with a success message
        return redirect()->route('login')->with('reset', "Change Password Success");
    }
}
