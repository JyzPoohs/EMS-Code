@extends('layouts.userProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card-header pb-0" style="background-color: #819CCE";>
                    <h6>MAKLUMAT PEMOHON</h6>
                </div>
                <br>
                <div class="card mb-4">
                    <div class="card-body p-3" style="background-color: #ECF3FF";>               
                        <table>
                            <tbody>
                                <tr>
                                    <td>No. Kad Pengenalan</td>
                                    <td>: <input disabled type="text" id="name" name="U_IC_No" value="{{auth()->user()->ic}}"></td>
                                </tr>
                                <tr>
                                    <td>Nama Pemohon </td>
                                    <td>: <input disabled type="text" id="name" name="name" value="{{auth()->user()->name}}"></td>
                                </tr>
                                <tr>
                                    <td>Tarikh Lahir</td>
                                    <td>: <input type="date" id="name" name="Birthday" placeholder=""  required></td>

                                </tr>
                                
                                <tr>
                                    <td>Umur</td>
                                    <td>: <input type="text" id="name" name="Age" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Jantina</td>
                                    <td>:
                                        <select>
                                            <option value="LELAKI">LELAKI</option>
                                            <option value="PEREMPUAN">PEREMPUAN</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bangsa</td>
                                    <td>:
                                        <select name="Ethnic">
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
                                    <td>: <input type="text" id="name" name="Nationality" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Alamat dalam K/P</td>
                                    <td>: <input type="text" id="name" name="IC_Address" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Alamat Semasa</td>
                                    <td>: <input type="text" id="name" name="Current_Address" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Telefon Bimbit</td>
                                    <td>: <input type="text" id="name" name="Home_Num" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Telefon Rumah</td>
                                    <td>: <input type="text" id="name" name="Home_Num" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Taraf Pendidkan</td>
                                    <td>:
                                        <select name="Edu_Level">
                                            <option value="UPSR">UPSR</option>
                                            <option value="PMR/PT3">PMR/PT3</option>
                                            <option value="SPM">SPM</option>
                                            <option value="IJAZAH">IJAZAH</option>
                                            <option value="LAIN-LAIN">LAIN-LAIN</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sektor Pekerjaan</td>
                                    <td>: <input type="text" id="name" name="" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Perkerjaan/Jawatan</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Alamat Tempat Kerja</td>
                                    <td>: <input type="float" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Telefon Pejabat</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Telefon</td><td>: <input type="text" id="name" name="name" placeholder=""></td>  
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Pendapatan</td>
                                    <td>: RM <input type="float" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Status Sebelum Perkahwinan</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Sijil Kursus Pra Perkahwinan</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <td>Status Saudara Baru (Mualaf)</td>
                                <td>:
                                    <select>
                                        <option value="YA">YA</option>
                                        <option value="TIDAK">TIDAK</option>
                                </td>
                            </tbody>
                        </table>
                        <br>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">
                                <a href="{{ route('user.requestMarriageUser') }}" class="btn btn-primary btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">BACK</a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" class="btn btn-primary btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">SAVE</a>
                            </div>
                            <div class="col-md-3">
                                <a href="{{ route('user.FormBrides') }}" class="btn btn-primary btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">NEXT</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
