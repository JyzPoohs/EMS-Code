@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0 " style="background-color: #66bdba";>
                        <h6>MAKLUMAT PASANGAN</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #e2fbfb";>               
                        <div>
                            <table>
                            <tbody>
                                <tr>
                                    <td>No. Kad Pengenalan Baru</td>
                                    <td>: 891122103213</td>
                                </tr>
                                <tr>
                                    <td>No. Kad Pengenalan Lama</td>
                                    <td>: 891122103213</td>
                                </tr>
                                <tr>
                                    <td>Nama Pemohom</td>
                                    <td>: Mohd Yunos Bin Man</td>
                                </tr>
                                <tr>
                                    <td>Tarikh Lahir</td>
                                    <td>: 22-11-1989</td>
                                </tr>
                                <tr>
                                    <td>Umur</td>
                                    <td>: 24 Tahun</td>
                                </tr>
                                <tr>
                                    <td>Jantina</td>
                                    <td>: Lelaki</td>
                                </tr>
                                <tr>
                                    <td>Bangsa</td>
                                    <td>: Melayu</td>
                                </tr>
                                <tr>
                                    <td>Warganegara</td>
                                    <td>: Malaysia</td>
                                </tr>
                                <tr>
                                    <td>Alamat Dalam K/P</td>
                                    <td>: Lot 1232 Tmana Jerai,Kuantan 25200 Pahang
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alamat Semasa</td>
                                    <td>: Lot 1232 Tmana Jerai,Kuantan 25200 Pahang</td>
                                </tr>
                                <tr>
                                    <td>No. Telefon Bimbit</td>
                                    <td>: 0192312819</td>
                                </tr>
                                <tr>
                                    <td>No. Telefon Rumah</td>
                                    <td>: 0192312819</td>
                                </tr>
                                <tr>
                                    <td>Taraf Pendidikan</td>
                                    <td>: Diploma</td>
                                </tr>
                                <tr>
                                    <td>Sektor Pekerjaan</td>
                                    <td>: Swasta</td>
                                </tr>
                                <tr>
                                    <td>Pekerjaan/Jawatan</td>
                                    <td>: Architecture</td>
                                </tr>
                                <tr>
                                    <td>Alamat Tempat Kerja</td>
                                    <td>: Menara Jaya, Tingkat 5, Kuantan, 25200 Pahang</td>
                                </tr>
                                <tr>
                                    <td>No. Telefon Pejabat</td>
                                    <td>: 0183127185</td>
                                </tr>
                                <tr>
                                    <td>Emel</td>
                                    <td>: Yunos24@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Amount Pendapatan</td>
                                    <td>: RM 8000</td>
                                </tr>
                                <tr>
                                    <td>Status Perkahwinan</td>
                                    <td>: Teruna</td>
                                </tr>
                                <tr>
                                    <td>No. Sijil Pra-Perkahwinan</td>
                                    <td>: KTN1M4/2022-00011</td>
                                </tr>
                                <tr>
                                    <td>Status Saudara Baru (Mualaf)</td>
                                    <td>: Tidak</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                        <br>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">
                                <a href="{{ route('staff.viewFormGrooms') }}" class="btn btn-primary btn-block"
                                    style="background-color: #179591; border:none; color: white;">BACK</a>
                            </div>
                            <div class="col-md-3">
                                <a href="{{ route('staff.viewFormMarriage') }}" class="btn btn-primary btn-block"
                                    style="background-color: #179591; border:none; color: white;">NEXT</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection