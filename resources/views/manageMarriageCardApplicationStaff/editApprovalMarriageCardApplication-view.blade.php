<link rel="stylesheet" href="{{ asset('css/staff-marriageRegistration.css') }}">
@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0" style="background-color: #66bdba";>
                        <h6>PERMOHONAN SIJIL DAN KAD >> SENARAI PERMOHONAN</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #e2fbfb;">
                        <table>
                            <tbody>
                                <tr style="background-color: #ffffff00;">
                                    <td>No. Akuan Terima</td>
                                    <td>: KTN1M4/2022-00011</td>
                                </tr>
                                <tr style="background-color: #ffffff00;">
                                    <td>Nama Suami</td>
                                    <td>: {{strtoupper($data->user->name)}} ({{$data->U_IC_No}})</td>
                                </tr>
                                <tr style="background-color: #ffffff00;">
                                    <td>Nama Isteri</td>
                                    <td>: {{$data->user->daftar->MR_isteri_nama}} ({{$data->user->daftar->MR_isteri_ic}})</td>
                                </tr>
                                <tr style="background-color: #ffffff00;">
                                    <td>No.Pendaftaran/Sijil</td>
                                    <td>: {{$data->user->daftar->MR_noDaftarSijil}}</td>
                                </tr>
                                <tr style="background-color: #ffffff00;">
                                    <td>Status Pendaftaran Nikah</td>
                                    <td>: {{$data->user->daftar->MR_Status}}</td>
                                </tr>
                                <tr style="background-color: #ffffff00;">
                                    <td>No. Permohonan Online</td>
                                    <td>: M3/2022-00001</td>
                                </tr>
                                <tr style="background-color: #ffffff00;">
                                    <td>No. Resit Bayaran</td>
                                    <td>: {{$data->Card_App_Payment_Receipt}}</td>
                                </tr>
                                <tr style="background-color: #ffffff00;">
                                    <td>Status mohon sijil/kad nikah</td>
                                    <td>:
                                        <select name="Card_App_Approval_Status">
                                            <option value="LULUS" @if($data->Card_App_Approval_Status == 'LULUS') selected @endif>LULUS</option>
                                            <option value="GAGAL" @if($data->Card_App_Approval_Status == 'GAGAL') selected @endif>GAGAL</option>
                                        </select>
                                        
                                    </td>
                                </tr>
                                <tr style="background-color: #ffffff00;">
                                    <td>Tarikh Kelulusan</td>
                                    <td>: <input type="date" name="Card_App_Approval_Date" value="{{ $data->Card_App_Approval_Date }}">

                                </tr>
                                <tr style="background-color: #ffffff00;">
                                    <td>Komment</td>
                                    <td>: <input name="Card_App_Comment" type="text" style="height: 100px; width: 400px;">{{$data->Card_App_Comment}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">
                                <a href="{{ route('staff.manageMarriageCardApp') }}" class="btn btn-primary btn-block"
                                    style="background-color: #179591; border:none; color: white;">BACK</a>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-primary btn-block" type="button"
                                    style="background-color: #179591; border:none; color: white;">SAVE</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
