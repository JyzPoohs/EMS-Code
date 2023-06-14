<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManageMarriageRegController extends Controller
{
    public function manage()
    {
        return view("registerMarriageUser.marriageRegistrationList"); 
    }

    public function editEFormsGrooms()
    {
        return view('registerMarriageUser.editE-FormGrooms-view');
    }

    public function editEFormsBrides()
    {
        return view('registerMarriageUser.editE-FormBrides-view');
    }

    public function editEFormsMarriage()
    {
        return view('registerMarriageUser.editE-FormMarriage-view');
    }
  
    public function viewEFormsGrooms()
    {
        return view('registerMarriageUser.viewE-FormGrooms-view');
    }

    public function viewEFormsBrides()
    {
        return view('registerMarriageUser.viewE-FormBrides-view');
    }

    public function viewEFormsMarriage()
    {
        return view('registerMarriageUser.viewE-FormMarriage-view');
    }
}
