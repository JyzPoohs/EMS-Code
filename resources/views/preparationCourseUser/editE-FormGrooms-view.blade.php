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
                                    <td>Nama Dalam K/P </td>
                                    <td>: <input disabled type="text" id="name" name="name" value="{{auth()->user()->name}}"></td>
                                </tr>
                                <tr>
                                    <td>Jantina</td>
                                    <td>: <input type="text" id="name" name="Birthday" placeholder=""  required></td>
                                </tr>
                                
                                <tr>
                                    <td>Tarikh Lahir</td>
                                    <td>: <input type="date" id="name" name="Age" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Warganegara</td>
                                    <td>: <input type="text" id="name" name="Nationality" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Negeri</td>
                                    <td>: <input type="text" id="name" name="IC_Address" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Telefon </td>
                                    <td>: <input type="text" id="name" name="Home_Num" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>: <input type="text" id="name" name="Home_Num" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Refference Id Pembayaran</td>
                                    <td>: <input type="text" id="name" name="Home_Num" placeholder=""></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">
                                <a href="{{ route('user.prepCourseInformation') }}" class="btn btn-primary btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">SAVE</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
