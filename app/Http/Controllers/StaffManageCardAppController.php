<?php

namespace App\Http\Controllers;

use App\Models\CardApplication;
use Illuminate\Http\Request;

class StaffManageCardAppController extends Controller
{
    public function manageCardAppStaff()
    {
        $datas = CardApplication::orderBy('created_at','desc')->get();

        return view("manageMarriageCardApplicationStaff.marriageCardApplicationListStaff-view", compact('datas')); 
    }

    public function approveCardAppStaff($id)
    {
        $data = CardApplication::where('MR_Card_ID', $id)->first();

        return view('manageMarriageCardApplicationStaff.editApprovalMarriageCardApplication-view', compact('data'));
    }
}
