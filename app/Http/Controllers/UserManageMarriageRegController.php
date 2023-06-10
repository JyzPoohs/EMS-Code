<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManageMarriageRegController extends Controller
{
    public function manage()
    {
        return view("registerMarriageUser.marriageRegistrationList"); 
    }

    public function eFormsGrooms()
    {
        return view('registerMarriageUser.editE-FormGrooms-view');
    }

    public function eFormsBrides()
    {
        return view('registerMarriageUser.editE-FormBrides-view');
    }

    public function eFormsMarriage()
    {
        return view('registerMarriageUser.editE-FormMarriage-view');
    }
}
