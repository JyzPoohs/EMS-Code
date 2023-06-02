<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 

class StaffManageMarriageRegController extends Controller
{
    public function manage()
    {
        return view("registerMarriageStaff.manageMarriageRegistrationList"); 
    }

    public function validationList()
    {
        return view("registerMarriageStaff.manageMarriageValidationList"); 
    }
}
