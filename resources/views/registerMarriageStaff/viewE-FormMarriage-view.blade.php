<link rel="stylesheet" href="{{ asset('css/staff-marriageRegistration.css') }}">
@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0" style="background-color: #66bdba";>
                        <h6>PERMOHONAN PENDAFTARAN PERKHAWINAN >> E-FORMS >> MARRIAGE</h6>
                    </div>
                    <div class="card-header pb-0" style="background-color: #D9D9D9";>
                        <h6>MAKLUMAT PERKAHWINAN</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #e2fbfb";>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Tarikh Mohon</td>
                                    <td>: 22/12/2022</td>
                                </tr>
                                <tr>
                                    <td>Nama Suami</td>
                                    <td>: HADI BIN EFFIZ</td>
                                </tr>
                                <tr>
                                    <td>Nama Isteri</td>
                                    <td>: SITI</td>
                                </tr>
                                <tr>
                                    <td>Kategori Perintah</td>
                                    <td>: KN001</td>
                                </tr>
                                <tr>
                                    <td>Resit Pendaftaran Perkhawinan</td>
                                    <td>: RS0002</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-header pb-0" style="background-color: #D9D9D9";>
                        <h6>MAKLUMAT CADANGAN MAJLIS AKAD NIKAH</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #e2fbfb";>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Tarikh Akad Nikah</td>
                                    <td>: 25/2/23</td>
                                </tr>
                                <tr>
                                    <td>Masa Akad Nikah</td>
                                    <td>: 9am</td>
                                </tr>
                                <tr>
                                    <td>Alamat Tempat Kahwin</td>
                                    <td>: KUANTAN</td>
                                </tr>
                                <tr>
                                    <td>Jenis Mas Kahwin</td>
                                    <td>: TUNAI</td>
                                </tr>
                                <tr>
                                    <td>Mas Kahwin</td>
                                    <td>: RM 12000</td>
                                </tr>
                                <tr>
                                    <td>Hantaran</td>
                                    <td>: RM 2000</td>
                                </tr>
                                <tr>
                                    <td>Nama Jurunikah</td>
                                    <td>: BALQIS</td>
                                </tr>
                                <tr>
                                    <td>No. Surat Perakuan Nikah</td>
                                    <td>: MN3432</td>
                                </tr>
                                <tr>
                                    <td>No. Pendaftaran</td>
                                    <td>: MR001</td>
                                </tr>
                                <tr>
                                    <td>Tarikh Pendaftaran</td>
                                    <td>: 25/2/2023</td>
                                </tr>
                                <tr>
                                    <td>Tempat Pendaftaran</td>
                                    <td>: A2,  KUANTAN</td>
                                </tr>
                                <tr>
                                    <td>Negara</td>
                                    <td>: MALAYSIA</td>
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
                    <div class="card-body p-3" style="background-color: #e2fbfb";>
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
                    <div class="card-body p-3" style="background-color: #e2fbfb";>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Nama Saksi (1)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="MOHD KAHRUL" disabled></td>
                                </tr>
                                <tr>
                                    <td>No. Kad Pengenalan Saksi (1)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="791222033213" disabled></td>
                                </tr>
                                <tr>
                                    <td>Umur Saksi (1)</td>
                                    <td>: <input type="number" id="name" name="name" placeholder="" value="44" disabled> TAHUN</td>
                                </tr>
                                <tr>
                                    <td>Alamat Saksi (1)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="91_L, TAMAN SAGA" disabled></td>
                                </tr>
                                <tr>
                                    <td>No. Telefon Saksi (1)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="01484188863" disabled></td>
                                </tr>
                                <tr>
                                    <td>Nama Saksi (2)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="SHARUL IFFAN" disabled></td>
                                </tr>
                                <tr>
                                    <td>No. Kad Pengenalan Saksi (2)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="881129020481" disabled></td>
                                </tr>
                                <tr>
                                    <td>Umur Saksi (2)</td>
                                    <td>: <input type="number" id="name" name="name" placeholder="" value="35" disabled> TAHUN</td>
                                </tr>
                                <tr>
                                    <td>Alamat Saksi (2)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="1 TAMAN IMPIAN, KUANTAN" disabled></td>
                                </tr>
                                <tr>
                                    <td>No. Telefon Saksi (2)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder="" value="0184829125" disabled></td>
                                </tr>
                            </tbody>
                        </table>
                    
                        <br>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">
                                <a href="{{ route('staff.eFormsBrides') }}" class="btn btn-primary btn-block"
                                    style="background-color: #179591; border:none; color: white;">BACK</a>
                            </div>
                            <div class="col-md-3">
                                <a href="{{ route('staff.approveMarriageRegistration') }}" class="btn btn-primary btn-block"
                                    style="background-color: #179591; border:none; color: white;">NEXT</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>
@endsection
