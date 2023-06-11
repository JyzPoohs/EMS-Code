<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CardApplication;

class UserManageCardAppController extends Controller
{
    public function manageCardAppUser($id)
    {
        $datas = CardApplication::where('U_IC_No', $id)->get();
        return view("manageMarriageCardApplicationUser.marriageCardApplicationListUser-view", compact('datas')); 
    }

    public function fillCardAppUser($id)
    {
        $data = CardApplication::where('U_IC_No', $id)->first();
        return view("manageMarriageCardApplicationUser.editMarriageCardApplicationInfo-view", compact('data')); 
    }

    public function viewCardAppUser($id)
    {
        $data = CardApplication::where('U_IC_No', $id)->first();
        return view("manageMarriageCardApplicationUser.viewMarriageCardApplicationInfo-view", compact('data')); 
    }
}
