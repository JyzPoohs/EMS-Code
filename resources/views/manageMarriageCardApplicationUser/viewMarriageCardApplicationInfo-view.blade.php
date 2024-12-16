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
                    <form action="{{ route('user.updateCardApp',  ['id' => $data->MR_Card_ID] ) }}" method="post">


                        @csrf
                        @method('PUT')
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
                                    <td>{{ $eform->P_Name }}
                                        ({{ $eform->Pasangan_IC_No }})</td>
                                </tr>
                                <tr>
                                    <td>Status Pendaftaran Nikah</td>
                                    <td>:</td>
                                    <td>LULUS</td>
                                </tr>
                                <tr>
                                    <td>Pilihan Sijil Dan Kad Nikah</td>
                                    <td>:</td>
                                    <td>
                                        <select id="Card_App_Type" name="Card_App_Type" class="form-control">
                                            <option
                                                value="KAD PERKHAWINAN"{{ $data->Card_App_Type == 'KAD PERKHAWINAN' ? ' selected' : '' }}>
                                                KAD PERKHAWINAN</option>
                                            <option
                                                value="SIJIL PERKHAWINAN"{{ $data->Card_App_Type == 'SIJIL PERKHAWINAN' ? ' selected' : '' }}>
                                                SIJIL PERKHAWINAN</option>
                                            <option
                                                value="KAD & SIJIL PERKHAWINAN"{{ $data->Card_App_Type == 'KAD & SIJIL PERKHAWINAN' ? ' selected' : '' }}>
                                                KAD & SIJIL PERKHAWINAN</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>No. Resit Bayaran</td>
                                    <td>:</td>
                                    <td>
                                        <input type="text" id="name" name="Card_App_Payment_Receipt"
                                            value="{{ $data->Card_App_Payment_Receipt }}" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pilihan Penghantaran</td>
                                    <td>:</td>
                                    <td>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="radio1" name="Card_App_Delivery_Options"
                                                value="PENGHANTARAN" class="form-check-input"
                                                {{ $data->Card_App_Delivery_Options == 'PENGHANTARAN' ? 'checked' : '' }}>
                                            <label for="radio1" class="form-check-label">Penghantaran</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="radio2" name="Card_App_Delivery_Options"
                                                value="PUNGUTAN" class="form-check-input"
                                                {{ $data->Card_App_Delivery_Options == 'PUNGUTAN' ? 'checked' : '' }}>
                                            <label for="radio2" class="form-check-label">Pungutan di Pejabat</label>
                                        </div>
    
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alamat Penghantaran</td>
                                    <td>:</td>
                                    <td>
                                        <textarea id="Card_App_Address" name="Card_App_Address" class="form-control">{{ $data->Card_App_Address }}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tarikh Pungutan</td>
                                    <td>:</td>
                                    <td>
                                        <input type="date" id="Card_App_Redeem_Date" name="Card_App_Redeem_Date"
                                            value="{{ $data->Card_App_Redeem_Date }}" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pejabat Pungutan</td>
                                    <td>:</td>
                                    <td>
                                        <select name="Card_App_Redeem_Location" class="form-control">
                                            <option disabled>Select PAID</option>
                                            <option value="PAID PEKAN"
                                                {{ $data->Card_App_Redeem_Location == 'PAID PEKAN' ? 'selected' : '' }}>PAID
                                                PEKAN</option>
                                            <option value="PAID KUANTAN"
                                                {{ $data->Card_App_Redeem_Location == 'PAID KUANTAN' ? 'selected' : '' }}>PAID
                                                KUANTAN</option>
                                            <option value="PAID ROMPIN"
                                                {{ $data->Card_App_Redeem_Location == 'PAID ROMPIN' ? 'selected' : '' }}>PAID
                                                ROMPIN</option>
                                            <option value="PAID MUADZAM SHAH"
                                                {{ $data->Card_App_Redeem_Location == 'PAID MUADZAM SHAH' ? 'selected' : '' }}>
                                                PAID MUADZAM SHAH</option>
                                            <option value="PAID MARAN"
                                                {{ $data->Card_App_Redeem_Location == 'PAID MARAN' ? 'selected' : '' }}>PAID
                                                MARAN</option>
                                            <option value="PAID JENGKA"
                                                {{ $data->Card_App_Redeem_Location == 'PAID JENGKA' ? 'selected' : '' }}>PAID
                                                JENGKA</option>
                                            <option value="PAID KUANTAN BARAT"
                                                {{ $data->Card_App_Redeem_Location == 'PAID KUANTAN BARAT' ? 'selected' : '' }}>
                                                PAID KUANTAN BARAT</option>
                                            <option value="PAID TEMERLOH"
                                                {{ $data->Card_App_Redeem_Location == 'PAID TEMERLOH' ? 'selected' : '' }}>PAID
                                                TEMERLOH</option>
                                            <option value="PAID BENTONG"
                                                {{ $data->Card_App_Redeem_Location == 'PAID BENTONG' ? 'selected' : '' }}>PAID
                                                BENTONG</option>
                                            <option value="PAID JERANTUT"
                                                {{ $data->Card_App_Redeem_Location == 'PAID JERANTUT' ? 'selected' : '' }}>PAID
                                                JERANTUT</option>
                                            <option value="PAID RAUB"
                                                {{ $data->Card_App_Redeem_Location == 'PAID RAUB' ? 'selected' : '' }}>PAID
                                                RAUB</option>
                                            <option value="PAID KUALA LIPIS"
                                                {{ $data->Card_App_Redeem_Location == 'PAID KUALA LIPIS' ? 'selected' : '' }}>
                                                PAID KUALA LIPIS</option>
                                            <option value="PAID BERA"
                                                {{ $data->Card_App_Redeem_Location == 'PAID BERA' ? 'selected' : '' }}>PAID
                                                BERA</option>
                                            <option value="PAID CAMERON HIGHLAND"
                                                {{ $data->Card_App_Redeem_Location == 'PAID CAMERON HIGHLAND' ? 'selected' : '' }}>
                                                PAID CAMERON HIGHLAND</option>
                                        </select>
    
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">
                                <a href="{{ route('user.manageMarriageCardApp', ['id' => auth()->user()->ic]) }}"
                                    class="btn btn-primary btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">BACK</a>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary btn-block" id="registerBtn"
                                    style="background-color: #0050d1; border:none; color: white;">
                                    {{ __('UPDATE') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
