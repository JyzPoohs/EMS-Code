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
                    <form method="POST" action="{{ route('user.storeMarriage', ['id' => $eform->Slip_Mohon_Online]) }}">
                        @csrf
                        <div class="card-body p-3" style="background-color: #ECF3FF";>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Tarikh Mohon</td>
                                        <td>: 22/12/2022</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Suami</td>
                                        <td>: {{ auth()->user()->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Isteri</td>
                                        <td>: {{ $eform->P_Name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Kategori Perintah</td>
                                        <td>: KTN1M4/2022-00011</td>
                                    </tr>
                                    <tr>
                                        <td>Resit Pendaftaran Perkhawinan</td>
                                        <td>: <input type="text" id="name" name="MR_Payment_Receipt" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Dokumen Resit Pendaftaran Perkhawinan
                                        </td>
                                        <td>
                                            : <input type="file">
                                        </td>
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
                                        <td>: <input type="date" id="name" name="name" placeholder=""
                                                value="{{ $eform->Date_Nikah }}" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Masa Akad Nikah</td>
                                        <td>: <input type="time" id="name" name="name" placeholder=""></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Tempat Kahwin</td>
                                        <td>: <input type="text" id="name" name="name" placeholder=""
                                                value="{{ $eform->Marriage_Place }}" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Mas Kahwin</td>
                                        <td>: <input type="text" id="name" name="name" placeholder=""
                                                value="{{ $eform->Marriage_Dowry_Type }}" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Mas Kahwin</td>
                                        <td>: RM <input type="text" id="name" name="name" placeholder=""
                                                value="{{ $eform->Marriage_Dowry }}" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Hantaran</td>
                                        <td>: RM <input type="text" id="name" name="name" placeholder=""
                                                value="{{ $eform->Other_Grants }}" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Jurunikah</td>
                                        <td>: <input type="text" id="name" name="MR_Jurunikah_Name" placeholder="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>No. Surat Perakuan Nikah</td>
                                        <td>: <input type="text" id="name" name="name" placeholder=""
                                                value="{{ $eform->Marriage_Dowry_Type }}" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>No. Pendaftaran</td>
                                        <td>: <input type="text" id="name" name="name" placeholder=""
                                                value="{{ $eform->Slip_Mohon_Online }}" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Tarikh Pendaftaran</td>
                                        <td>: <input type="date" id="name" name="name" placeholder=""
                                                value="{{ $eform->Date_Nikah }}" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Pendaftaran</td>
                                        <td>: <input type="text" id="name" name="name" placeholder=""
                                                value="{{ $eform->Marriage_Place }}" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Negara</td>
                                        <td>: <input type="text" id="name" name="name" placeholder=""
                                                value="{{ $eform->Marriage_Country }}" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Lafaz Ta’liq</td>
                                        <td>:
                                            <select name="MR_Lafaz_Taliq">
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
                                        <td>: <input type="text" id="name" name="name" placeholder=""
                                                value="{{ $eform->Marriage_Country }}" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Wali</td>
                                        <td>: <input type="text" id="name" name="name" placeholder=""
                                                value="{{ $eform->W_Name }}" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>No. Kad Pengenalan Wali</td>
                                        <td>: <input type="text" id="name" name="name" placeholder=""
                                                value="{{ $eform->W_IC_No }}" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Wali</td>
                                        <td>: <input type="text" id="name" name="name" placeholder=""
                                                value="{{ $eform->W_Address }}" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>No. Telefon Wali</td>
                                        <td>: <input type="text" id="name" name="name" placeholder=""
                                                value="{{ $eform->W_Phone }}" disabled></td>
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
                                        <td>: <input type="text" id="name" name="name" placeholder=""
                                                value="MOHD KAHRUL" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>No. Kad Pengenalan Saksi (1)</td>
                                        <td>: <input type="text" id="name" name="name" placeholder=""
                                                value="791222033213" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Umur Saksi (1)</td>
                                        <td>: <input type="number" id="name" name="name" placeholder=""
                                                value="44" disabled> TAHUN</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Saksi (1)</td>
                                        <td>: <input type="text" id="name" name="name" placeholder=""
                                                value="91_L, TAMAN SAGA" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>No. Telefon Saksi (1)</td>
                                        <td>: <input type="text" id="name" name="name" placeholder=""
                                                value="01484188863" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Saksi (2)</td>
                                        <td>: <input type="text" id="name" name="name" placeholder=""
                                                value="SHARUL IFFAN" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>No. Kad Pengenalan Saksi (2)</td>
                                        <td>: <input type="text" id="name" name="name" placeholder=""
                                                value="881129020481" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>Umur Saksi (2)</td>
                                        <td>: <input type="number" id="name" name="name" placeholder=""
                                                value="35" disabled> TAHUN</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Saksi (2)</td>
                                        <td>: <input type="text" id="name" name="name" placeholder=""
                                                value="1 TAMAN IMPIAN, KUANTAN" disabled></td>
                                    </tr>
                                    <tr>
                                        <td>No. Telefon Saksi (2)</td>
                                        <td>: <input type="text" id="name" name="name" placeholder=""
                                                value="0184829125" disabled></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                        <div class="card-body p-3" style="background-color: #ECF3FF";>

                            <div class="row justify-content-center text-center">
                                <div class="col-md-3">
                                    <a href="{{ route('user.editEFormsBrides') }}" class="btn btn-primary btn-block"
                                        style="background-color: #0050d1; border:none; color: white;">BACK</a>
                                </div>

                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary btn-block" id="registerBtn"
                                        style="background-color: #0050d1; border:none; color: white;">
                                        {{ __('DAFTAR') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>


        </div>

    </div>
@endsection
