<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManageCardAppController extends Controller
{
    public function manageCardAppUser()
    {
        return view("manageMarriageCardApplicationUser.manageMarriageCardApplicationListUser"); 
    }

    public function fillCardAppUser()
    {
        return view("manageMarriageCardApplicationUser.marriageCardApplicationInfo"); 
    }
}
