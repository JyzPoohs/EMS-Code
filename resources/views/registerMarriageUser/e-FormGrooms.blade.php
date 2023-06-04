<link rel="stylesheet" href="{{ asset('css/user-marriageRegistration.css') }}">
@extends('layouts.userProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card-header pb-0" style="background-color: #819CCE";>
                    <h6>PERMOHONAN PENDAFTARAN PERKHAWINAN >> E-FORMS >> GROOMS</h6>
                </div>
                <br>
                <div class="card mb-4">
                    <div class="card-body p-3" style="background-color: #ECF3FF";>               
                        <div class="mt-2">
                            <div style="text-align: center;">
                                <label for="name">No. K/P Pasangan :</label><br>
                                <input type="text" id="name" name="name" placeholder="870930065551">
                            </div>
                            <br>
                            <div style="text-align: center;">
                                <label for="category">Kategori Pendaftaran Nikah :</label><br>
                                <select id="category" name="category" style="width: 100%;">
                                    <option value="1">PENDAFTARAN NIKAH DENGAN KEBENARAN</option>
                                    <option value="2">PENDAFTARAN NIKAH TANPA KEBENARAN</option>
                                </select>
                            </div>
                            <br>
                            <div style="text-align: center;">
                                <label for="receipt">No. Akuan Terima Kebenaran Berkahwin :</label><br>
                                <input type="text" id="receipt" name="receipt" placeholder="Enter receipt number">
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">
                                <a href="{{ route('user.eFormsBrides') }}" class="btn btn-primary btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">NEXT</a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" class="btn btn-primary btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">SAVE</a>
                            </div>
                            <div class="col-md-3">
                                <a href="{{ route('user.manageMarriageRegistration') }}" class="btn btn-primary btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">BACK</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
