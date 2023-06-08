<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManageMarriageRegController extends Controller
{
    public function manage()
    {
        return view("registerMarriageUser.manageMarriageRegistrationMain"); 
    }

    public function eFormsGrooms()
    {
        return view('registerMarriageUser.e-FormGrooms');
    }

    public function eFormsBrides()
    {
        return view('registerMarriageUser.e-FormBrides');
    }

    public function eFormsMarriage()
    {
        return view('registerMarriageUser.e-FormMarriage');
    }
}
