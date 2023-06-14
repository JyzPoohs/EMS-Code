<link rel="stylesheet" href="{{ asset('css/staff-marriageRegistration.css') }}">
@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0 " style="background-color: #66bdba";>
                        <h6>PERMOHONAN PENDAFTARAN PERKHAWINAN >> E-FORMS >> GROOMS</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #e2fbfb";>               
                        <div>
                            <table>
                            <tbody>
                                <tr>
                                    <td>No. Kad Pengenalan</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="111111111111" disabled></td>
                                </tr>
                                <tr>
                                    <td>Nama Suami</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="HADI BIN EFFIZ" disabled></td>
                                </tr>
                                <tr>
                                    <td>Tarikh Lahir</td>
                                    <td>: <input type="date" id="name" name="name" placeholder="" value="11/11/11" disabled></td>
                                </tr>
                                <tr>
                                    <td>Umur</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="21" disabled></td>
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
                                    <td>: <input type="text" id="name" name="name" placeholder=""  value="MALAYSIA" disabled></td>
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
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="EDUCATION" disabled></td>
                                </tr>
                                <tr>
                                    <td>Pendapatan</td>
                                    <td>: RM <input type="float" id="name" name="name" placeholder="" value="5000" disabled></td>
                                </tr>
                                <tr>
                                    <td>Perkerjaan/Jawatan</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="LECTURER" disabled></td>
                                </tr>
                                <tr>
                                    <td>Alamat Dalam K/P</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="123-A, TAMAN TAS, KUANTAN, PAHANG" disabled></td>
                                </tr>
                                <tr>
                                    <td>No. Telefon</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="0114108809" disabled></td>
                                </tr>
                                <tr>
                                    <td>Alamat Semasa</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="123-A, TAMAN TAS, KUANTAN, PAHANG" disabled></td>
                                </tr>
                                <tr>
                                    <td>Status Sebelum Perkahwinan</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="BUJANG" disabled></td>
                                </tr>
                                <tr>
                                    <td>No. Sijil Kursus Pra Perkahwinan</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="CB00021" disabled></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                        <br>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">
                                <a href="{{ route('staff.manageMarriage') }}" class="btn btn-primary btn-block"
                                    style="background-color: #179591; border:none; color: white;">BACK</a>
                            </div>
                            <div class="col-md-3">
                                <a href="{{ route('staff.eFormsBrides') }}" class="btn btn-primary btn-block"
                                    style="background-color: #179591; border:none; color: white;">NEXT</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
