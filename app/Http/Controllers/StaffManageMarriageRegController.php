<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marriage_Registration;


class StaffManageMarriageRegController extends Controller
{
    public function manage()
    {
        $datas = Marriage_Registration::orderBy('created_at', 'desc')->get();

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
