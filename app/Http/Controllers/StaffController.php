<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    public function profile()
    {
        $user = Staff::find(auth()->user()->id);

        return view('manageUserProfile.profile', compact('user'));
    }
}
