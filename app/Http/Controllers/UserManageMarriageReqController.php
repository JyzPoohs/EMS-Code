<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManageMarriageReqController extends Controller
{
    public function view()
    {
        return view('requestMarriageUser.requestMarriageList');
    }

    public function FormGrooms()
    {
        return view('requestMarriageUser.editE-FormGrooms-view');
    }
    
    public function FormBrides(Request $request)
    {
        //$request = new Marriage_Request();
        return view('requestMarriageUser.editE-FormBrides-view');
    }
    
    public function FormMarriage()
    {
        return view('requestMarriageUser.editE-FormMarriage-view');
    }

    public function Document()
    {
        return view('requestMarriageUser.editE-Document');
    }
}