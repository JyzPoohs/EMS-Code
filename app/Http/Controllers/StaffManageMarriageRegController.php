<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marriage_Request;
use App\Models\Marriage_Registration;

class StaffManageMarriageRegController extends Controller
{


    public function manage()
    {
        // $ic = auth()->user()->ic;
        $datas = Marriage_Registration::with('mohon.user')->get();
        return view("registerMarriageStaff.marriageRegistrationList", compact('datas'));
    }

    public function eFormsGrooms()
    {
        return view('registerMarriageStaff.viewE-FormGrooms-view');
    }

    public function eFormsBrides()
    {
        return view('registerMarriageStaff.viewE-FormBrides-view');
    }

    public function eFormsMarriage()
    {
        return view('registerMarriageStaff.viewE-FormMarriage-view');
    }
    
    public function approveMarriageRegistration()
    {
        return view('registerMarriageStaff.editApprovalMarriageRegistration-view');
    }
}
