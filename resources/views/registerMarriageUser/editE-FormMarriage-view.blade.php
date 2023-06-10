<link rel="stylesheet" href="{{ asset('css/user-marriageRegistration.css') }}">
@extends('layouts.userProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card-header pb-0" style="background-color: #819CCE";>
                    <h6>PERMOHONAN PENDAFTARAN PERKHAWINAN >> E-FORMS >> MARRIAGE</h6>
                </div>
                <br>
                <div class="card-header pb-0" style="background-color: #D9D9D9";>
                    <h6>MAKLUMAT PERKAHWINAN</h6>
                </div>
                <div class="card mb-4">
                    <div class="card-body p-3" style="background-color: #ECF3FF";>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Tarikh Mohon</td>
                                    <td>: 22/12/2022</td>
                                </tr>
                                <tr>
                                    <td>Nama Suami</td>
                                    <td>: ALI BIN IDRIS</td>
                                </tr>
                                <tr>
                                    <td>Nama Isteri</td>
                                    <td>: SITI BIN ABU</td>
                                </tr>
                                <tr>
                                    <td>Kategori Perintah</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Resit Pendaftaran Perkhawinan</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-header pb-0" style="background-color: #D9D9D9";>
                        <h6>MAKLUMAT CADANGAN MAJLIS AKAD NIKAH</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #ECF3FF";>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Tarikh Akad Nikah</td>
                                    <td>: <input type="date" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Masa Akad Nikah</td>
                                    <td>: <input type="time" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Alamat Tempat Kahwin</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Jenis Mas Kahwin</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Mas Kahwin</td>
                                    <td>: RM <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Hantaran</td>
                                    <td>: RM <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Nama Jurunikah</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Surat Perakuan Nikah</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Pendaftaran</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Tarikh Pendaftaran</td>
                                    <td>: <input type="date" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Tempat Pendaftaran</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Negara</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Lafaz Ta’liq</td>
                                    <td>: 
                                        <select>
                                            <option value="YA">YA</option>
                                            <option value="TIDAK">TIDAK</option>
                                        </select>
                                    </td>
                               </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-header pb-0" style="background-color: #D9D9D9";>
                        <h6>MAKLUMAT WALI</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #ECF3FF";>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Hubungan</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Nama Wali</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Kad Pengenalan  Wali</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Alamat Wali</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Tarikh Lahir Wali</td>
                                    <td>: <input type="date" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Umur Wali</td>
                                    <td>: <input type="number" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Telefon Wali</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-header pb-0" style="background-color: #D9D9D9";>
                        <h6>MAKLUMAT SAKSI</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #ECF3FF";>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Nama Saksi (1)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Kad Pengenalan Saksi (1)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Umur Saksi (1)</td>
                                    <td>: <input type="number" id="name" name="name" placeholder=""> TAHUN</td>
                                </tr>
                                <tr>
                                    <td>Alamat Saksi (1)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Telefon Saksi (1)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Nama Saksi (2)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Kad Pengenalan Saksi (2)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Umur Saksi (2)</td>
                                    <td>: <input type="number" id="name" name="name" placeholder=""> TAHUN</td>
                                </tr>
                                <tr>
                                    <td>Alamat Saksi (2)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Telefon Saksi (2)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-header pb-0" style="background-color: #D9D9D9";>
                        <h6>MAKLUMAT SAKSI (KELUARGA)</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #ECF3FF";>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Nama Keluarga (1)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Kad Pengenalan Saksi Keluarga (1)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Alamat Saksi Keluarga (1)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Telefon Saksi Keluarga (1)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Nama Keluarga (2)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Kad Pengenalan Saksi Keluarga (2)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Alamat Saksi Keluarga (2)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Telefon Saksi Keluarga (2)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">
                                <a href="{{ route('user.eFormsBrides') }}" class="btn btn-primary btn-block"
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

    </div>
@endsection
