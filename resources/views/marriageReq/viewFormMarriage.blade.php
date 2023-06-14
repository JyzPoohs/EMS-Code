@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <br>
                <div class="card-header pb-0" style="background-color: #66bdba";>
                    <h6>MAKLUMAT PERKAHWINAN</h6>
                </div>
                <div class="card mb-4">
                    <div class="card-body p-3" style="background-color: #e2fbfb";>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Tarikh Mohon</td>
                                    <td>: 15/12/2022</td>
                                </tr>
                                <tr>
                                    <td>Nama Pemohon</td>
                                    <td>: SITI BINTI ABU BAKAR</td>
                                </tr>
                                <tr>
                                    <td>Nama Pasangan</td>
                                    <td>: MOHD YUNUS BIN MAN</td>
                                </tr>
                                <tr>
                                    <td>Tempat Kahwin</td>
                                    <td>: Dewan Serbaguna Taman Jerai</td>
                                </tr>
                                <tr>
                                    <td>Negara</td>
                                    <td>: Malaysia</td>
                                </tr>
                                <tr>
                                    <td>Negeri</td>
                                    <td>: Pahang</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-header pb-0" style="background-color: #66bdba";>
                        <h6>MAKLUMAT CADANGAN MAJLIS AKAD NIKAH</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #e2fbfb";>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Tarikh Akad Nikah</td>
                                    <td>: 19-02-2023</td>
                                </tr>
                                <tr>
                                    <td>Alamat Tempat Kahwin</td>
                                    <td>: Dewan Serbaguna Taman Jerai, Kuantan 25200 Pahang</td>
                                </tr>
                                <tr>
                                    <td>Jenis Mas Kahwin</td>
                                    <td>: Tunai</td>
                                </tr>
                                <tr>
                                    <td>Mas Kahwin</td>
                                    <td>: RM 22.50</td>
                                </tr>
                                <tr>
                                    <td>Hantaram</td>
                                    <td>: RM 10000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-header pb-0" style="background-color: #66bdba";>
                        <h6>MAKLUMAT WALI</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #e2fbfb";>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Nama Wali</td>
                                    <td>: AHMAD ZAKI MARWAN BIN ZAKUAN</td>
                                </tr>
                                <tr>
                                    <td>No. Kad Pengenalan Wali</td>
                                    <td>: 750213025543</td>
                                </tr>
                                <tr>
                                    <td>Alamat Wali</td>
                                    <td>: No 23 Taman Purnama, Kuantan 25200 Pahang</td>
                                </tr>
                                <tr>
                                    <td>Tarikh Lahir Wali</td>
                                    <td>: 13-02-1975</td>
                                </tr>
                                <tr>
                                    <td>Umur Wali</td>
                                    <td>: 45 Tahun</td>
                                </tr>
                                <tr>
                                    <td>No. Telefon Wali</td>
                                    <td>: 0146751232</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-header pb-0" style="background-color: #66bdba";>
                        <h6>MAKLUMAT SAKSI</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #e2fbfb";>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Nama Saksi (1)</td>
                                    <td>: MUHD SYAMIL BIN ZUBAIDI</td>
                                </tr>
                                <tr>
                                    <td>No. Kad Pengenalan Saksi (1)</td>
                                    <td>: 781023045643</td>
                                </tr>
                                <tr>
                                    <td>Umur Saksi (1)</td>
                                    <td>: 42 TAHUN</td>
                                </tr>
                                <tr>
                                    <td>Alamat Saksi (1)</td>
                                    <td>: No 84 Taman Kelana, Kuantan 25200 Pahang</td>
                                </tr>
                                <tr>
                                    <td>No. Telefon Saksi (1)</td>
                                    <td>: 0176542431</td>
                                </tr>
                                <tr>
                                    <td>Nama Saksi (2)</td>
                                    <td>: ZAMRUD ZABIDI BIN ABDULLAH</td>
                                </tr>
                                <tr>
                                    <td>No. Kad Pengenalan Saksi (2)</td>
                                    <td>: 771023045643</td>
                                </tr>
                                <tr>
                                    <td>Umur Saksi (2)</td>
                                    <td>: 41 TAHUN</td>
                                </tr>
                                <tr>
                                    <td>Alamat Saksi (2)</td>
                                    <td>: No 84 Taman Kelana, Kuantan 25200 Pahang</td>
                                </tr>
                                <tr>
                                    <td>No. Telefon Saksi (2)</td>
                                    <td>: 0125464231</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-header pb-0" style="background-color: #66bdba";>
                        <h6>PEMBAYARAN</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #e2fbfb";>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Bukti Pembayaran</td>
                                    <td>: </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">
                                <a href="{{ route('staff.viewFormBrides') }}" class="btn btn-primary btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">BACK</a>
                            </div>
                            <div class="col-md-3">
                                <a href="{{route('staff.viewDocuments')}}" class="btn btn-primary btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">NEXT</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>
@endsection
