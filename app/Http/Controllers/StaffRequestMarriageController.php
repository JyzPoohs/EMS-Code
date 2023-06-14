<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffRequestMarriageController extends Controller
{
    public function views()
    {
        return view('marriageReq.requestMarriageStaff');
    }
    public function viewFormGrooms()
    {
        return view('marriageReq.viewFormGrooms');
    }
    public function viewFormBrides()
    {
        return view('marriageReq.viewFormBrides');
    }
    public function viewFormMarriage()
    {
        return view('marriageReq.viewFormMarriage');
    }
    public function viewDocuments()
    {
        return view('marriageReq.viewDocuments');
    }

    
}
