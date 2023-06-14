<link rel="stylesheet" href="{{ asset('css/user-marriageRegistration.css') }}">
@extends('layouts.userProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card-header pb-0" style="background-color: #819CCE";>
                    <h6>PERMOHONAN PENDAFTARAN PERKHAWINAN >> E-FORMS >> BRIDES</h6>
                </div>
                <br>
                <div class="card mb-4">
                    <div class="card-body p-3" style="background-color: #ECF3FF";>
                        <table>
                            <tbody>
                                <tr>
                                    <td>No. Kad Pengenalan</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="{{$eform->Pasangan_IC_No}}" disabled></td>
                                </tr>
                                <tr>
                                    <td>Nama Suami</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="{{$eform->P_Name}}" disabled></td>
                                </tr>
                                <tr>
                                    <td>Tarikh Lahir</td>
                                    <td>: <input type="date" id="name" name="name" placeholder="" value="{{$eform->P_Date_of_Birth}}" disabled></td>
                                </tr>
                                <tr>
                                    <td>Umur</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="{{$eform->P_Age}}" disabled></td>
                                </tr>
                                <tr>
                                    <td>Bangsa</td>
                                    <td>:
                                        <select value="{{$eform->P_Ethnic}}" disabled>
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
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="{{$eform->P_Rationality}}" disabled></td>
                                </tr>
                                <tr>
                                    <td>Taraf Pendidkan</td>
                                    <td>:
                                        <select value="{{$eform->P_Edu_Level}}" disabled>
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
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="{{$eform->P_Employment_Sector}}" disabled></td>
                                </tr>
                                <tr>
                                    <td>Pendapatan</td>
                                    <td>: RM <input type="float" id="name" name="name" placeholder="" value="{{$eform->P_Amount_Salary}}" disabled></td>
                                </tr>
                                <tr>
                                    <td>Perkerjaan/Jawatan</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="{{$eform->P_Job}}" disabled></td>
                                </tr>
                                <tr>
                                    <td>Alamat Dalam K/P</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="{{$eform->P_IC_Address}}" disabled></td>
                                </tr>
                                <tr>
                                    <td>No. Telefon</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="{{$eform->P_Phone_No}}" disabled></td>
                                </tr>
                                <tr>
                                    <td>Alamat Semasa</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="{{$eform->P_Home_Num}}" disabled></td>
                                </tr>
                                <tr>
                                    <td>Status Sebelum Perkahwinan</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="BUJANG" disabled></td>
                                </tr>
                                <tr>
                                    <td>No. Sijil Kursus Pra Perkahwinan</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="{{$eform->PrepCourse_ID}}" disabled></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">
                                <a href="{{ route('user.editEFormsGrooms') }}" class="btn btn-primary btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">BACK</a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" class="btn btn-primary btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">SAVE</a>
                            </div>
                            <div class="col-md-3">
                                <a href="{{ route('user.editEFormsMarriage') }}" class="btn btn-primary btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">NEXT</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
