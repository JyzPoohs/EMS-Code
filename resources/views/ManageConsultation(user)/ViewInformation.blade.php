@extends('layouts.userProfile')
@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0" style="background-color: #90a9d6";>
                        <h6>MAKLUMAT PEMOHON</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #d9e4f9;">
                        <table>
                            <tbody>
                                <tr style="background-color: #ffffff00;">
                                    <td>Nombor KP</td>
                                    <td>: 870930065551</td>
                                </tr>
                                <tr style="background-color: #ffffff00;">
                                    <td>Nama Pengadu</td>
                                    <td>: HADI BIN EFFIZ </td>
                                </tr>
                                <tr style="background-color: #ffffff00;">
                                    <td>Tarikh Lahir</td>
                                    <td>: 30-09-1987</td>

                                </tr>
                                <tr style="background-color: #ffffff00;">
                                    <td>Bangsa</td>
                                    <td>: Melayu</td>
                                </tr>

                                <tr style="background-color: #ffffff00;">
                                    <td>No Telefon</td>
                                    <td>:
                                        018-9093408
                                    </td>
                                </tr>
                                <tr style="background-color: #ffffff00;">
                                    <td>Tahap Pendidikan</td>
                                    <td>: IJAZAH SARJANA MUDA</td>
                                </tr>
                                <tr style="background-color: #ffffff00;">
                                    <td>Jawatan</td>
                                    <td>: CEO</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">

                            </div>

                        </div>
                    </div>
                    <div class="card-header pb-0" style="background-color: #90a9d6";>
                        <h6>MAKLUMAT PEEKAHWINAN</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #d9e4f9;">
                        <table>
                            <tbody>
                                <tr style="background-color: #ffffff00;">
                                    <td>Nombor KP</td>
                                    <td>: 890930065551</td>
                                </tr>
                                <tr style="background-color: #ffffff00;">
                                    <td>Nama Pengadu</td>
                                    <td>: SITI BINTI ABU BAKAR ()</td>
                                </tr>
                                <tr style="background-color: #ffffff00;">
                                    <td>Tarikh Lahir</td>
                                    <td>: 30-09-1989</td>

                                </tr>
                                <tr style="background-color: #ffffff00;">
                                    <td>Bangsa</td>
                                    <td>: Melayu</td>
                                </tr>

                                <tr style="background-color: #ffffff00;">
                                    <td>No Telefon</td>
                                    <td>: 012-9093408

                                    </td>
                                </tr>
                                <tr style="background-color: #ffffff00;">
                                    <td>Tahap Pendidikan

                                    </td>
                                    <td>: IJAZAH SARJANA MUDA</td>
                                </tr>
                                <tr style="background-color: #ffffff00;">
                                    <td>Jawatan</td>
                                    <td>: SURI RUMAH</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-header pb-0" style="background-color: #90a9d6";>
                        <h6>MAKLUMAT ADUAN</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #d9e4f9;">
                            <table>
                                <tbody>
                                    <tr style="background-color: #ffffff00;">
                                        <td>Tujuan Aduan</td>
                                        <td>: 870930065551</td>
                                    </tr>
                                    <tr style="background-color: #ffffff00;">
                                        <td>Keterangan Aduan</td>
                                        <td>: ALI BIN IDRIS</td>
                                    </tr>
                                    <tr style="background-color: #ffffff00;">
                                        <td>Tarikh Konsultasi</td>
                                        <td>: 30-05-2023</td>

                                    <tr style="background-color: #ffffff00;">
                                        <td>PAID Pilihan</td>
                                        <td>:
                                            PAID Pekan
                                        </td>
                                    </tr>
                                    <tr style="background-color: #ffffff00;">
                                        <td>Kounselor Pilihan</td>
                                        <td>: Wanita</td>
                                    </tr>
                                </tbody>
                            </table>

                    </div>

                </div>


            </div>
            <a href="{{route('user.Search')}}" class="btn btn-primary">KEMBALI</a>
        </div>
    </div>
    @endsection
