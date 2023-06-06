<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function validateCode(Request $request)
    {
        if (strtoupper($request->code) === 'CODE')
            return redirect()->route('staff.register');
        else
            return redirect()->route('staff.accessCode')->with('fail', 'The access code is incorrect.');
    }
}
