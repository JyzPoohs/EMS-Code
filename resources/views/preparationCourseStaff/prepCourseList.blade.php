@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card-header pb-0" style="background-color: #66bdba";>
                    <h6>BUTIRAN KURSUS KAHWIN</h6>
                </div>
                <br>
                <div class="card mb-4">
                    <div class="card-body p-8" style="background-color: #e2fbfb";>               
                        <table>
                            <tbody>
                                <tr>
                                    <td>    No. Siri</td>
                                    <td>: <input type="text" id="name" name="Birthday" placeholder=""  required></td>
                                </tr>
                                
                                <tr>
                                    <td>Penganjur</td>
                                    <td>: <input type="date" id="name" name="Age" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>: <input type="text" id="name" name="Nationality" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Tarikh Mula</td>
                                    <td>: <input type="text" id="name" name="IC_Address" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Tarikh Akhir </td>
                                    <td>: <input type="text" id="name" name="Home_Num" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Kapasiti</td>
                                    <td>: <input type="text" id="name" name="Home_Num" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Bayaran</td>
                                    <td>: <input type="text" id="name" name="Home_Num" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Nombor Akaun</td>
                                    <td>: <input type="text" id="name" name="Home_Num" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Jenis Bank</td>
                                    <td>: <input type="text" id="name" name="Home_Num" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Nama Bank</td>
                                    <td>: <input type="text" id="name" name="Home_Num" placeholder=""></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">
                                <a href="{{ route('staff.staffPrepCourseList') }}" class="btn btn-primary btn-block"
                                    style="background-color: #179591; border:none; color: white;">KEMBALI</a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" class="btn btn-primary btn-block"
                                    style="background-color: #179591; border:none; color: white;">SAVE</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
