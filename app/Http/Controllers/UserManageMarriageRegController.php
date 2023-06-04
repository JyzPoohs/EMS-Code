<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManageMarriageRegController extends Controller
{
    public function manage()
    {
        return view("registerMarriageUser.manageMarriageRegistrationMain"); 
    }
}
