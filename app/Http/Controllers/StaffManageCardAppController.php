<?php

namespace App\Http\Controllers;

use App\Models\CardApplication;
use App\Models\Marriage_Registration;
use App\Models\Marriage_Request;
use Illuminate\Http\Request;

class StaffManageCardAppController extends Controller
{
    public function manageCardAppStaff()
    {
        $datas = CardApplication::orderBy('created_at', 'desc')->get();
        $eforms = Marriage_Request::orderBy('created_at', 'desc')->get();
        $registers = Marriage_Registration::orderBy('created_at','desc')->get();
        dd($datas->toArray(),$eforms->toArray(),$registers->toArray());
        return view("manageMarriageCardApplicationStaff.marriageCardApplicationListStaff-view", compact('datas', 'eforms','registers')); 
    }

    public function approveCardAppStaff($id)
    {
        $data = CardApplication::where('MR_Card_ID', $id)->first();

        return view('manageMarriageCardApplicationStaff.editApprovalMarriageCardApplication-view', compact('data'));
    }
}
