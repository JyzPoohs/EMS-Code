<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marriage_Registration;

class StaffManageMarriageRegController extends Controller
{


    public function manage()
    {
        $datas = Marriage_Registration::orderBy('created_at', 'desc')->get();

        return view("registerMarriageStaff.manageMarriageRegistrationList", compact('datas'));
    }

    public function validationList()
    {


        return view("registerMarriageStaff.manageMarriageValidationList");
    }
}
