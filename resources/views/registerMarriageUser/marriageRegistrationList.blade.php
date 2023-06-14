<link rel="stylesheet" href="{{ asset('css/user-marriageRegistration.css') }}">
@extends('layouts.userProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="card mb-4">
                <div class="card-header pb-0" style="background-color: #819CCE";>
                    <h6>PERMOHONAN PENDAFTARAN NIKAH</h6>
                </div>
                <div class="card-body p-3" style="background-color: #ECF3FF";>
                    <div class="row justify-content-center text-center">
                        <div class="col-md-3">
                            <a href="{{ route('user.editEFormsGrooms') }}" class="btn btn-primary"
                                style="background-color: #0050d1; border:none; color: white;">Daftar Baru</a>
                        </div>
                    </div>                        
                    <div class="mt-2">
                        <table class="table w-100" id="list">
                            <thead>
                                <tr>
                                    <th>Bil</th>
                                    <th>No. KP/Nama Isteri</th>
                                    <th>No. AKaun Terima</th>
                                    <th>Tarikh Mohon</th>
                                    <th>Status</th>
                                    <th class="col-md-3 text-center">Operasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>{{$eform->Pasangan_IC_No}}
                                        {{$eform->P_Name}}</td>
                                    <td>KTN1M4/2022-00011</td>
                                    <td>15/12/2022</td>
                                    <td>TELAH HANTAR</td>
                                    <td class="text-center">
                                        <a href="{{ route('user.viewEFormsGrooms') }}" class="btn btn-primary">
                                            <i class="fas fa-eye"></i></a>
                                        <a href="{{ route('user.editEFormsGrooms') }}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="btn btn-danger"
                                            onclick="return confirm('Confirm to delete?')"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>                             
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
