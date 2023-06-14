<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffManageCourseController extends Controller
{
    public function staffPrepCourseList()
    {
        return view('preparationCourseStaff.staffPrepCourseList');
    }

    public function editEPrepCourseInformation()
    {
        return view('preparationCourseStaff.editE-PrepCourseInformation');
    }
    
    public function viewEListGroomsPrepCourse()
    {
        return view('preparationCourseStaff.viewE-ListGroomsPrepCourse');
    }

    public function viewEGroomsInformation()
    {
        return view('preparationCourseStaff.viewE-GroomsInformation');
    }
}
