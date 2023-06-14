<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IncentiveController extends Controller
{
    public function show()
    {
        return redirect()->route('User.userIncentive');
        return redirect()->route('User.userStatus');
    }

    public function userUpload()
    {
        return view('manageIncentiveUser.userUpload');
    }

    //get ic
    public function profile()
    {
        $user = User::find(auth()->user()->id);
        return view('manageUserProfile.profile-view', compact('user'));
    }

    //download borang insentif
    public function download($file_name)
    {
        $file_path = public_path('files/' . $file_name);
        return response()->download($file_path);
    }

    //upload borang
    public function index()
    {
        return view('userUpload');
    }

    public function showUploadFile(Request $request)
    {
        $file = $request->file('image');

        //Display File Name
        echo 'File Name: ' . $file->getClientOriginalName();
        echo '<br>';

        //Display File Extension
        echo 'File Extension: ' . $file->getClientOriginalExtension();
        echo '<br>';

        //Display File Real Path
        echo 'File Real Path: ' . $file->getRealPath();
        echo '<br>';

        //Display File Size
        echo 'File Size: ' . $file->getSize();
        echo '<br>';

        //Display File Mime Type
        echo 'File Mime Type: ' . $file->getMimeType();

        //Move Uploaded File
        $destinationPath = 'uploads';
        $file->move($destinationPath, $file->getClientOriginalName());
    }
}
