<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffManageCardAppController extends Controller
{
    public function manageCardAppStaff()
    {
        return view("manageMarriageCardApplicationStaff.manageMarriageCardApplicationListStaff"); 
    }
}
