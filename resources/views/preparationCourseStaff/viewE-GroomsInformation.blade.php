@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0 " style="background-color: #66bdba";>
                        <h6>BUTIRAN PEMOHON</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #e2fbfb";>               
                        <div>
                            <table>
                            <tbody>
                                <tr>
                                    <td>No. Siri</td>
                                    <td>: KTN1M4/2022-00011</td>
                                </tr>
                                <tr>
                                    <td>No. Kad Pengenalan </td>
                                    <td>: 891122103213</td>
                                </tr>
                                <tr>
                                    <td>Nama </td>
                                    <td>: SITI BINTI ABU BAKAR</td>
                                </tr>
                                <tr>
                                    <td>Bayaran</td>
                                    <td>: RM 200</td>
                                </tr>
                                <tr>
                                    <td>Warganegara</td>
                                    <td>: Malaysia</td>
                                </tr>
                                <tr>
                                    <td>Negeri</td>
                                    <td>: Pahang</td>
                                </tr>
                                <tr>
                                    <td>No. Telefon</td>
                                    <td>: 012453423</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>: Siti88@gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Refference ID Pembayaran</td>
                                    <td>: 345127642618428471
                                    </td>
                                </tr>
                    
                            </tbody>
                        </table>
                    </div>
                        <br>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">
                                <a href="{{ route('staff.viewEListGroomsPrepCourse') }}" class="btn btn-primary btn-block"
                                    style="background-color: #179591; border:none; color: white;">BACK</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection