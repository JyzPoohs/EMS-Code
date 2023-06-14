<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRequestMarriageController extends Controller
{
    public function view()
    {
        return view('marriageReq.requestMarriageUser');
    }

    public function FormGrooms()
    {
        return view('marriageReq.FormGrooms');
    }
    
    public function FormBrides(Request $request)
    {
        //$request = new Marriage_Request();
        return view('marriageReq.FormBrides');
    }
    
    public function FormMarriage()
    {
        return view('marriageReq.FormMarriage');
    }

    public function Document()
    {
        return view('marriageReq.Document');
    }
}