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
                        <form method="POST" action="{{ route('staff.updateCardApp', ['id' => $data->MR_Card_ID]) }}">
                            @csrf
                            @method('PUT')
                            <table>
                                <tbody>
                                    <tr style="background-color: #ffffff00;">
                                        <td>No. Akuan Terima</td>
                                        <td>: KTN1M4/2022-00011</td>
                                    </tr>
                                    <tr style="background-color: #ffffff00;">
                                        <td>Nama Suami</td>
                                        <td>: {{ strtoupper($data->user->name) }} ({{ $data->U_IC_No }})</td>
                                    </tr>
                                    <tr style="background-color: #ffffff00;">
                                        <td>Nama Isteri</td>
                                        <td>: {{ $data->registration->mohon->P_Name }}
                                            ({{ $data->registration->mohon->Pasangan_IC_No }})</td>
                                    </tr>
                                    <tr style="background-color: #ffffff00;">
                                        <td>No.Pendaftaran/Sijil</td>
                                        <td>: MR0{{ $data->MR_ID }}</td>
                                    </tr>
                                    <tr style="background-color: #ffffff00;">
                                        <td>Status Pendaftaran Nikah</td>
                                        <td>: {{ $data->registration->MR_Approval_Status }}</td>
                                    </tr>
                                    <tr style="background-color: #ffffff00;">
                                        <td>No. Resit Bayaran</td>
                                        <td>: {{ $data->Card_App_Payment_Receipt }}</td>
                                    </tr>
                                    <tr style="background-color: #ffffff00;">
                                        <td>Status mohon sijil/kad nikah</td>
                                        <td>:
                                            <select name="Card_App_Approval_Status">
                                                <option value="LULUS" @if ($data->Card_App_Approval_Status == 'LULUS') selected @endif>
                                                    LULUS
                                                </option>
                                                <option value="GAGAL" @if ($data->Card_App_Approval_Status == 'GAGAL') selected @endif>
                                                    GAGAL
                                                </option>
                                            </select>

                                        </td>
                                    </tr>
                                    <tr style="background-color: #ffffff00;">
                                        <td>Tarikh Kelulusan</td>
                                        <td>: <input type="date" name="Card_App_Approval_Date"
                                                value="{{ $data->Card_App_Approval_Date }}">

                                    </tr>
                                    <tr style="background-color: #ffffff00;">
                                        <td>Komment</td>
                                        <td>: <input name="Card_App_Comment" type="text"
                                                style="height: 100px; width: 400px;" value="{{ $data->Card_App_Comment }}">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <div class="row justify-content-center text-center">
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary btn-block col-md-4" id="registerBtn"
                                        style="background-color: #179591; border:none; color: white;">
                                        {{ __('UPDATE') }}
                                    </button>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ route('staff.manageMarriageCardApp') }}" class="btn btn-primary btn-block col-md-4"
                                        style="background-color: #179591; border:none; color: white;">BACK</a>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>
@endsection
