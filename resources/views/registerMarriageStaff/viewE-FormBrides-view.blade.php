<link rel="stylesheet" href="{{ asset('css/staff-marriageRegistration.css') }}">
@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0" style="background-color: #66bdba";>
                        <h6>PERMOHONAN PENDAFTARAN PERKHAWINAN >> E-FORMS >> BRIDES</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #e2fbfb";>
                        <table>
                            <tbody>
                                <tr>
                                    <td>No. Kad Pengenalan</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""value="011011020202" disabled value="011011020202" disabled></td>
                                </tr>
                                <tr>
                                    <td>Nama Isteri</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" disabled value="SITI" disabled></td>
                                </tr>
                                <tr>
                                    <td>Tarikh Lahir</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""value="11/10/2001" disabled></td>
                                </tr>
                                <tr>
                                    <td>Umur</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""value="22" disabled></td>
                                </tr>
                                <tr>
                                    <td>Bangsa</td>
                                    <td>:
                                        <select>
                                            <option value="MELAYU">MELAYU</option>
                                            <option value="CINA">CINA</option>
                                            <option value="INDIA">INDIA</option>
                                            <option value="ORANG ASLI">ORANG ASLI</option>
                                            <option value="LAIN-LAIN">LAIN-LAIN</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Warganegara</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""value="MALAYSIA" disabled></td>
                                </tr>
                                <tr>
                                    <td>Taraf Pendidkan</td>
                                    <td>:
                                        <select>
                                            <option value="UPSR">UPSR</option>
                                            <option value="PMR/PT3">PMR/PT3</option>
                                            <option value="SPM">SPM</option>
                                            <option value="IJAZAH">IJAZAH</option>
                                            <option value="LAIN-LAIN">LAIN-LAIN</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sektor Perkerjaan/Jawatan</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""value="EDUCATION" disabled></td>
                                </tr>
                                <tr>
                                    <td>Pendapatan</td>
                                    <td>: RM <input type="float" id="name" name="name" placeholder=""value="2333" disabled></td>
                                </tr>
                                <tr>
                                    <td>Perkerjaan/Jawatan</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""value="TEACHER" disabled></td>
                                </tr>
                                <tr>
                                    <td>Alamat Dalam K/P</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""value="A2, SMK KUANTAN" disabled></td>
                                </tr>
                                <tr>
                                    <td>No. Telefon</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""value="0110120202" disabled></td>
                                </tr>
                                <tr>
                                    <td>Alamat Semasa</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""value="A2, SMK KUANTAN" disabled></td>
                                </tr>
                                <tr>
                                    <td>Status Sebelum Perkahwinan</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""value="BUJANG" disabled></td>
                                </tr>
                                <tr>
                                    <td>No. Sijil Kursus Pra Perkahwinan</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""value="CB00021" disabled></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">
                                <a href="{{ route('staff.eFormsGrooms') }}" class="btn btn-primary btn-block"
                                    style="background-color: #179591; border:none; color: white;">BACK</a>
                            </div>
                            <div class="col-md-3">
                                <a href="{{ route('staff.eFormsMarriage') }}" class="btn btn-primary btn-block"
                                    style="background-color: #179591; border:none; color: white;">NEXT</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
