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
        $data = Marriage_Registration::where('U_IC_No', $ic)->with('mohon.user')->first();
        // dd($data);
        return view('registerMarriageUser.editE-FormGrooms-view',compact('data'));
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
  
    public function viewEFormsGrooms($id)
    {
        $ic = auth()->user()->ic;
        $data = Marriage_Registration::where('MR_ID', $id)->with('mohon.user')->first();
        return view('registerMarriageUser.viewE-FormGrooms-view',compact('data'));
    }

    public function viewEFormsBrides($id)
    {
        $ic = auth()->user()->ic;
        $eform = Marriage_Request::where('U_IC_No',$ic)->first();
        return view('registerMarriageUser.viewE-FormBrides-view',compact('eform', 'id'));
    }

    public function viewEFormsMarriage($id)
    {
        $ic = auth()->user()->ic;
        $eform = Marriage_Request::where('U_IC_No',$ic)->first();
        $data = Marriage_Registration::where('MR_ID', $id)->with('mohon')->first();
        return view('registerMarriageUser.viewE-FormMarriage-view',compact('eform', 'data'));
    }

    public function store(Request $request, $id)
    {
        //dd($request);
        $request->merge([
         'U_IC_No' => auth()->user()->ic,   
         'request_id' => $id,
        ]);

        // $daftar = new Marriage_Registration();

        // $daftar->MR_Jurunikah_Name = $request->MR_Jurunikah_Name;
        // $daftar->MR_Jurunikah_Name = $request->MR_Jurunikah_Name;
        // $daftar->MR_Jurunikah_Name = $request->MR_Jurunikah_Name;
        // $daftar->MR_Jurunikah_Name = $request->MR_Jurunikah_Name;


        // dd($request);
        Marriage_Registration::create($request->all());
        return redirect()->route('user.manageMarriageRegistration');
    }

    public function destroy($id)
    {
        $datas = Marriage_Registration::where('MR_ID', $id);

        if (!$datas) {
            return redirect()->back()->with('error', 'card not found.');
        }

        $datas->delete();
        return redirect()->route('user.manageMarriageRegistration')->with('success', 'Marriage Registration deleted successfully.');
    }
}
