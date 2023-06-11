<link rel="stylesheet" href="{{ asset('css/user-marriageRegistration.css') }}">
@extends('layouts.userProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4 ">
            <div class="card mb-4 col-md-12 pl-0 pr-0">
                <div class="card-header pb-0" style="background-color: #819CCE">
                    <h6>PENDAFTARAN NIKAH >> PERMOHONAN SIJIL DAN KAD NIKAH >> INFO</h6>
                </div>
                <div class="card-body p-3" style="background-color: #ECF3FF">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>No. Akuan Terima</td>
                                <td>:</td>
                                <td>KTN1M4/2022-00011</td>
                            </tr>
                            <tr>
                                <td>Nama Suami</td>
                                <td>:</td>
                                <td>{{ strtoupper($data->user->name) }} ({{ $data->U_IC_No }})</td>
                            </tr>
                            <tr>
                                <td>Nama Isteri</td>
                                <td>:</td>
                                <td>{{ $data->user->daftar->MR_isteri_nama }}
                                    ({{ $data->user->daftar->MR_isteri_ic }})</td>
                            </tr>
                            <tr>
                                <td>No.Pendaftaran/Sijil</td>
                                <td>:</td>
                                <td>{{ $data->user->daftar->MR_noDaftarSijil }}</td>
                            </tr>
                            <tr>
                                <td>No. Permohonan Online</td>
                                <td>:</td>
                                <td>M3/2022-00001</td>
                            </tr>
                            <tr>
                                <td>Status Pendaftaran Nikah</td>
                                <td>:</td>
                                <td>{{ $data->user->daftar->MR_Status }}</td>
                            </tr>
                            <tr>
                                <td>Pilihan Sijil Dan Kad Nikah</td>
                                <td>:</td>
                                <td>
                                    <select id="Card_App_Type" name="Card_App_Type" class="form-control">
                                        <option selected value="KAD PERKHAWINAN">Select Jenis</option>
                                        <option value="KAD PERKHAWINAN">KAD PERKHAWINAN</option>
                                        <option value="SIJIL PERKHAWINAN">SIJIL PERKHAWINAN</option>
                                        <option value="KAD & SIJIL PERKHAWINAN">KAD & SIJIL PERKHAWINAN</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>No. Resit Bayaran</td>
                                <td>:</td>
                                <td>
                                    <input type="text" id="name" name="Card_App_Payment_Receipt" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Pilihan Penghantaran</td>
                                <td>:</td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="radio1" name="Card_App_Delivery_Options"
                                            value="PENGHANTARAN" class="form-check-input">
                                        <label for="radio1" class="form-check-label">Penghantaran</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="radio2" name="Card_App_Delivery_Options"
                                            value="PUNGUTAN" class="form-check-input">
                                        <label for="radio2" class="form-check-label">Pungutan di Pejabat</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat Penghantaran</td>
                                <td>:</td>
                                <td>
                                    <textarea id="Card_App_Address" name="Card_App_Address"
                                        class="form-control"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>Tarikh Pungutan</td>
                                <td>:</td>
                                <td>
                                    <input type="date" id="Card_App_Redeem_Date" name="Card_App_Redeem_Date"
                                        class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Pejabat Pungutan</td>
                                <td>:</td>
                                <td>
                                    <select name="Card_App_Redeem_Location" class="form-control">
                                        <option disabled selected>Select PAID</option>
                                        <option value="PAID PEKAN">PAID PEKAN</option>
                                        <option value="PAID KUANTAN">PAID KUANTAN</option>
                                        <option value="PAID ROMPIN">PAID ROMPIN</option>
                                        <option value="PAID MUADZAM SHAH">PAID MUADZAM SHAH</option>
                                        <option value="PAID MARAN">PAID MARAN</option>
                                        <option value="PAID JENGKA">PAID JENGKA</option>
                                        <option value="PAID KUANTAN BARAT">PAID KUANTAN BARAT</option>
                                        <option value="PAID TEMERLOH">PAID TEMERLOH</option>
                                        <option value="PAID BENTONG">PAID BENTONG</option>
                                        <option value="PAID JERANTUT">PAID JERANTUT</option>
                                        <option value="PAID RAUB">PAID RAUB</option>
                                        <option value="PAID KUALA LIPIS">PAID KUALA LIPIS</option>
                                        <option value="PAID BERA">PAID BERA</option>
                                        <option value="PAID CAMERON HIGHLAND">PAID CAMERON HIGHLAND</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <div class="row justify-content-center text-center">
                        <div class="col-md-3">
                            <a href="{{ route('user.manageMarriageCardApp', ['id' => auth()->user()->ic]) }}" class="btn btn-primary btn-block"
                                style="background-color: #0050d1; border:none; color: white;">BACK</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="btn btn-primary btn-block"
                            style="background-color: #0050d1; border:none; color: white;">SAVE</a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="btn btn-primary btn-block"
                            style="background-color: #0050d1; border:none; color: white;">SUBMIT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
