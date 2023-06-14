<link rel="stylesheet" href="{{ asset('css/staff-marriageRegistration.css') }}">
@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0" style="background-color: #66bdba";>
                        <h6>PERMOHONAN PENDAFTARAN NIKAH >> MAKLUMAT KELULUSAN</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #e2fbfb";>

                        <table>
                            <tbody>
                                <tr>
                                    <td>Nama Suami</td>
                                    <td>: ALI BIN IDRIS (870930065551)</td>
                                </tr>
                                    <td>Nama Isteri</td>
                                    <td>: SITI BINTI ABU BAKAR (890930065551)</td>
                                </tr>
                                    <tr>
                                    <td>Tarikh Mohon</td>
                                    <td>: 08/12/2022</td>
                                </tr>
                                <tr>
                                    <td>Tarikh Terima</td>
                                    <td>: 15/12/2022</td>
                                </tr>
                                <tr>
                                    <td>No. Permohonan Online</td>
                                    <td>: M2/2019-005494</td>
                                </tr>
                                <tr>
                                    <td>No. Akaun Terima</td>
                                    <td>: KTN1M4/2022-00011</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>:
                                        <select>
                                            <option value="LULUS">LULUS</option>
                                            <option value="GAGAL">GAGAL</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tarikh Kelulusan</td>
                                    <td>: <input type="date"></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">
                                <a href="{{ route('staff.eFormsMarriage') }}" class="btn btn-primary btn-block"
                                    style="background-color: #179591; border:none; color: white;">BACK</a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" class="btn btn-primary btn-block"
                                    style="background-color: #179591; border:none; color: white;">SAVE</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
