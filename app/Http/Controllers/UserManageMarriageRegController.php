<?php

namespace App\Http\Controllers;

use App\Models\Marriage_Registration;
use App\Models\Marriage_Request;
use Illuminate\Http\Request;

class UserManageMarriageRegController extends Controller
{
    public function manage()
    {
        $ic = auth()->user()->ic;
        $datas = Marriage_Registration::where('U_IC_No', $ic)->with('mohon')->get();
        // return dd($datas->toArray());
        // $eform = Marriage_Request::where('U_IC_No',$ic)->first();
        return view("registerMarriageUser.marriageRegistrationList", compact('datas')); 
    }
    
    public function editEFormsGrooms()
    {
        $ic = auth()->user()->ic;
        $eform = Marriage_Request::where('U_IC_No',$ic)->first();
        return view('registerMarriageUser.editE-FormGrooms-view',compact('eform'));
    }

    public function editEFormsBrides()
    {
        $ic = auth()->user()->ic;
        $eform = Marriage_Request::where('U_IC_No',$ic)->first();
        return view('registerMarriageUser.editE-FormBrides-view',compact('eform'));
    }

    public function editEFormsMarriage()
    {
        $ic = auth()->user()->ic;
        $eform = Marriage_Request::where('U_IC_No',$ic)->first();
        return view('registerMarriageUser.editE-FormMarriage-view',compact('eform'));
    }
  
    public function viewEFormsGrooms()
    {
        return view('registerMarriageUser.viewE-FormGrooms-view');
    }

    public function viewEFormsBrides()
    {
        return view('registerMarriageUser.viewE-FormBrides-view');
    }

    public function viewEFormsMarriage()
    {
        return view('registerMarriageUser.viewE-FormMarriage-view');
    }

    public function store(Request $request, $id)
    {
        $request->merge([
         'U_IC_No' => auth()->user()->ic,   
         'request_id' => $id,
        ]);

        // dd($request);
        Marriage_Registration::create($request->all());
        return redirect()->route('user.manageMarriageRegistration');
    }
}
