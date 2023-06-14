<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;
use App\Http\Controllers\Controller;
class ConsultationController extends Controller
{
    public function show()
    {
        return redirect()->route('user.consult');
        return redirect()->route('user.ViewInformation');
    }
}
