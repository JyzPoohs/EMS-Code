<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffManageCardAppController extends Controller
{
    public function manageCardAppStaff()
    {
        return view("manageMarriageCardApplicationStaff.marriageCardApplicationListStaff-view"); 
    }

    public function approveCardAppStaff()
    {
        return view('manageMarriageCardApplicationStaff.editApprovalMarriageCardApplication-view');
    }
}
