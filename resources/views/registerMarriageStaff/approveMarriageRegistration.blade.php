<link rel="stylesheet" href="{{ asset('css/staff-marriageRegistration.css') }}">
@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0" style="background-color: #66bdba";>
                        <h6>PERMOHONAN PENDAFTARAN NIKAH >> MAKLUMAT KELULUSAN</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #e2fbfb";>
                        <div class="mt-2">
                            <table class="table w-100" id="list">
                                <thead>
                                    <tr>
                                        <th>Bil</th>
                                        <th>No. Pendaftaran /Sijil</th>
                                        <th>No. KP/Nama Suami</th>
                                        <th>No. KP/Nama Isteri</th>
                                        <th>No. AKaun Terima</th>
                                        <th>Tarikh Terima</th>
                                        <th>Status</th>
                                        <th class="col-md-2">Operasi</th>
                                    </tr>
                                </thead>
                                
                            </table>
                        </div>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">
                                <a href="{{ route('staff.eFormsMarriage') }}" class="btn btn-primary btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">BACK</a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" class="btn btn-primary btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">SAVE</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
