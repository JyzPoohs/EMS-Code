<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManageCourseController extends Controller
{
    public function editFormGrooms()
    {
        return view('preparationCourseUser.editFormGrooms');
    }
    public function prepCourseInformation()
    {
        return view('preparationCourseUser.prepCourseInformation');
    }
}
