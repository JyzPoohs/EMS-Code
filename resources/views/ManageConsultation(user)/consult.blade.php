@extends('layouts.userProfile')
@section('content')

<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card mb-4">
                <div class="card-header pb-0" style="background-color: #66bdba";>
                    <h6>PERMOHONAN KHIDMAT NASIHAT</h6>
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
                                <td>: ALI BIN IDRIS (870930065551)</td>
                            </tr>
                            <tr style="background-color: #ffffff00;">
                                <td>Nama Isteri</td>
                                <td>: SITI BINTI ABU BAKAR (890930065551)</td>
                            </tr>
                            <tr style="background-color: #ffffff00;">
                                <td>No.Pendaftaran/Sijil</td>
                                <td>: (PN)MS/0077/2022-D1-SN06220001</td>
                            </tr>
                            <tr style="background-color: #ffffff00;">
                                <td>Status Pendaftaran Nikah</td>
                                <td>: LULUS</td>
                            </tr>
                            <tr style="background-color: #ffffff00;">
                                <td>No. Permohonan Online</td>
                                <td>: M3/2022-00001</td>
                            </tr>
                            <tr style="background-color: #ffffff00;">
                                <td>No. Resit Bayaran</td>
                                <td>: RB-00130-001</td>
                            </tr>
                            <tr style="background-color: #ffffff00;">
                                <td>Status mohon sijil/kad nikah</td>
                                <td>:
                                    <select>
                                        <option value="LULUS">LULUS</option>
                                        <option value="GAGAL">GAGAL</option>
                                    </select>
                                </td>
                            </tr>
                            <tr style="background-color: #ffffff00;">
                                <td>Tarikh Kelulusan</td>
                                <td>: <input type="date"></td>
                            </tr>
                            <tr style="background-color: #ffffff00;">
                                <td>Komment</td>
                                <td>: <input type="text" style="height: 100px; width: 400px;"></td>
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
