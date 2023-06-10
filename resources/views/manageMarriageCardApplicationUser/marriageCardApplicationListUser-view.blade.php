<link rel="stylesheet" href="{{ asset('css/user-marriageRegistration.css') }}">
@extends('layouts.userProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="card mb-4">
                <div class="card-header pb-0" style="background-color: #819CCE";>
                    <h6>PENDAFTARAN PERKHAWINAN >> PERMOHONAN SIJIL DAN KAD NIKAH</h6>
                </div>
                <div class="card-body p-3" style="background-color: #ECF3FF";>
                    <div class="row justify-content-center text-center">
                        <div class="col-md-3">
                            <a href="{{ route('user.marriageCardAppInfo') }}" class="btn btn-primary"
                            style="background-color: #0050d1; border:none; color: white;">Daftar Baru</a>
                        </div>
                    </div>                        
                    <div class="col-md-3">
                        <a>Nombor Kad Pengenalan : <input type="text" id="name" name="name" placeholder=""></a>
                    </div>
                    <div class="mt-2">
                        <table class="table w-100" id="list">
                            <thead>
                                <tr>
                                    <th>Bil</th>
                                    <th>No.Pendaftaran /Sijil</th>
                                    <th>No. K/P Nama Suami</th>
                                    <th>No. K/P Nama Isteri</th>
                                    <th>No. Resit Bayaran</th>
                                    <th>Tarikh Mohon</th>
                                    <th>Status</th>
                                    <th class="col-md-2">Operasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>(PN)MS/0077/
                                        2022-D1-
                                        SN06220001</td>
                                    <td>870930065551
                                        ALI BIN IDRIS</td>
                                    <td>890930065551
                                        SITI BINTI ABU BAKAR</td>
                                    <td>RB-00130-001</td>
                                    <td>21/12/2022</td>
                                    <td>UNTUK DILULUSKAN</td>
                                    <td>
                                        <a href="#" class="btn btn-primary">
                                            <i class="fas fa-eye"></i></a>
                                        <a href="#" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
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
            <div class="col-lg-12 mb-lg-0 mb-4">
                

            </div>

        </div>

    </div>
@endsection
