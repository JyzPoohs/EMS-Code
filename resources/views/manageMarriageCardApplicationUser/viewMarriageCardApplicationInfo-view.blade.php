<link rel="stylesheet" href="{{ asset('css/user-marriageRegistration.css') }}">
@extends('layouts.userProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0" style="background-color: #819CCE";>
                        <h6>PENDAFTARAN NIKAH >> PERMOHONAN SIJIL DAN KAD NIKAH >> INFO</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #ECF3FF";>
                        <table>
                            <tbody>
                                <tr>
                                    <td>No. Akuan Terima</td>
                                    <td>: KTN1M4/2022-00011</td>
                                </tr>
                                <tr>
                                    <td>Nama Suami</td>
                                    <td>: ALI BIN IDRIS (870930065551)</td>
                                </tr>
                                <tr>
                                    <td>Nama Isteri</td>
                                    <td>: SITI BINTI ABU BAKAR (890930065551)</td>
                                </tr>
                                <tr>
                                    <td>No.Pendaftaran/Sijil</td>
                                    <td>: (PN)MS/0077/2022-D1-SN06220001</td>
                                </tr>
                                <tr>
                                    <td>No. Permohonan Online</td>
                                    <td>: M3/2022-00001</td>
                                </tr>
                                <tr>
                                    <td>Status Pendaftaran Nikah</td>
                                    <td>: LULUS</td>
                                </tr>
                                <tr>
                                    <td>Pilihan Sijil Dan Kad Nikah</td>
                                    <td>: 
                                    <select id="category" name="category">
                                        <option value="1">KAD PERKHAWINAN</option>
                                        <option value="2">SIJIL PERKHAWINAN</option>
                                        <option value="2">KAD & SIJIL PERKHAWINAN</option>
                                    </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>No. Resit Bayaran</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Pilihan Penghantaran</td>
                                    <td>:
                                        <input type="checkbox" id="checkbox1" name="Penghantaran" onchange="handleCheckboxChange(1)">
                                        <label for="checkbox1">Penghantaran</label>
                                        <input type="checkbox" id="checkbox2" name="Pungutan" onchange="handleCheckboxChange(2)">
                                        <label for="checkbox2">Pungutan di Pejabat</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alamat Penghantaran</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Tarikh Pungutan </td>
                                    <td>: <input type="date" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Pejabat Pungutan </td>
                                    <td>: 
                                        <select id="category" name="category">
                                            <option value="1">PEJABAT KUANTAN</option>
                                            <option value="2">PEJABAT PEKAN</option>
                                            <option value="2">PEJABAT BENTONG</option>
                                        </select>
                                        </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">
                                <a href="{{ route('user.manageMarriageCardApp') }}" class="btn btn-primary btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">BACK</a>
                            </div>
                        </div>
                        
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
