<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CardApplication;
use App\Models\Marriage_Request;

class UserManageCardAppController extends Controller
{
    public function manageCardAppUser()
    {
        $id = auth()->user()->ic;
        $datas = CardApplication::where('U_IC_No', $id)->get();
        $eform = Marriage_Request::where('U_IC_No',$id)->first();
        return view("manageMarriageCardApplicationUser.marriageCardApplicationListUser-view", compact('datas', 'eform'));
    }

    public function fillCardAppUser($id)
    {
        $data = auth()->user();
        // $data = CardApplication::where('U_IC_No', $id)->first();
        return view("manageMarriageCardApplicationUser.editMarriageCardApplicationInfo-view", compact('data'));
    }

    public function viewCardAppUser($id)
    {
        $data = CardApplication::where('MR_Card_ID', $id)->first();
        // dd($data,$id);
        return view("manageMarriageCardApplicationUser.viewMarriageCardApplicationInfo-view", compact('data'));
    }

    public function createCardApp(Request $request)
    {
        $request->validate(
            [
                'Card_App_Type' => 'required',
                'Card_App_Payment_Receipt' => 'required',
                'Card_App_Delivery_Options' => '',
                'Card_App_Address' => '',
                'Card_App_Redeem_Date' => '',
                'Card_App_Redeem_Location' => '',
            ],
            [
                'Card_App_Type.required' => 'Marriage card type is required.',
                'Card_App_Payment_Receipt.required' => 'Marriage receipt num is required.',
            ]
        );

        // $card = new CardApplication();
        // $card->Card_App_Type = $request->Card_App_Type;
        // $card->Card_App_Payment_Receipt = $request->Card_App_Payment_Receipt;
        // $card->Card_App_Delivery_Options = $request->Card_App_Delivery_Options;
        // $card->Card_App_Address = $request->Card_App_Address;
        // $card->Card_App_Redeem_Date = $request->Card_App_Redeem_Date;
        // $card->Card_App_Redeem_Location = $request->Card_App_Redeem_Location;

        // $card([
        //     'Card_App_Type' = $request->Card_App_Type;
        //     'Card_App_Payment_Receipt' = $request->Card_App_Payment_Receipt;
        //     'Card_App_Delivery_Options' = $request->Card_App_Delivery_Options;
        //     'Card_App_Address' = $request->Card_App_Address;
        //     'Card_App_Redeem_Date' = $request->Card_App_Redeem_Date;
        //     'Card_App_Redeem_Location' = $request->Card_App_Redeem_Location;

        // ]);

        $request->merge([
            'U_IC_No' => Auth()->user()->ic,
        ]);
        $id = auth()->user()->ic;
        // dd($request);
        CardApplication::create($request->all());
        return redirect()->route('user.manageMarriageCardApp');
    }

    public function destroy($id)
    {
        $card = CardApplication::where('MR_Card_ID',$id);
        
        if (!$card) {
            return redirect()->back()->with('error', 'card not found.');
        }
        
        $card->delete();
        return redirect()->route('user.manageMarriageCardApp')->with('success', 'card deleted successfully.');
    }
    public function update(Request $request, $id){
        CardApplication::where('MR_Card_ID', $id)->update($request->all());
        return redirect()->route('user.manageMarriageCardApp')->with('success', 'card updated successfully.');
        
    }
}
