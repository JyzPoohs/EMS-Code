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
        $datas = CardApplication::with('registration.mohon.user')->orderBy('created_at', 'desc')->get();
        // dd($datas->toArray());

        // dd($datas->toArray(),$eforms->toArray(),$registers->toArray());
        return view("manageMarriageCardApplicationStaff.marriageCardApplicationListStaff-view", compact('datas')); 
    }

    public function approveCardAppStaff($id)
    {
        $data = CardApplication::where('MR_Card_ID', $id)->first();

        return view('manageMarriageCardApplicationStaff.editApprovalMarriageCardApplication-view', compact('data'));
    }

    public function update(Request $request, $id)
    {
        CardApplication::where('MR_Card_ID', $id)->update($request->only('Card_App_Approval_Date', 
        'Card_App_Approval_Status', 'Card_App_Comment'));
        return redirect()->route('staff.manageMarriageCardApp')->with('success', 'card updated successfully.');
    }
}
