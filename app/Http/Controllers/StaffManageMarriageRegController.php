<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 

class StaffManageMarriageRegController extends Controller
{
    public function index()
    {
        return view("registerMarriageStaff.manageMarriageValidationList"); 
    }
}
