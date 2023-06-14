<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffManageIncentiveController extends Controller
{
    public function staffIncentive()
    {
        

        return view('manageIncentiveStaff.staffIncentive');
    }

}
