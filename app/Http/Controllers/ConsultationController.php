<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function show()
    {
        return redirect()->route('user.consult');
    }
}
