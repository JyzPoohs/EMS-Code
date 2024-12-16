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
       // return redirect()->route('user.ViewInformation');
    }

    public function submitForm(Request $request)
    {
        // Logic to handle form submission and store data in the database
        // You can access the form data using $request->input('input_name')

        // Example: Storing the form data in the database
        $data = [
            'tujuan_aduan' => $request->input('tujuan_aduan'),
            'keterangan_aduan' => $request->input('keterangan_aduan'),
            'tarikh_konsultasi' => $request->input('tarikh_konsultasi'),
            'paid_pilihan' => $request->input('paid_pilihan'),
            'kounselor_pilihan' => $request->input('kounselor_pilihan'),
        ];

        // Save the data in the database (consultations table)
        Consultation::create($data);

        // Redirect back or to another page after form submission
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
    public function edit($id)
{
    $aduan = Consultation::findOrFail($id);
    return view('editInformation', compact('aduan'));
}
}
