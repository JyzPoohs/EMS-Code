@extends('layouts.userProfile')
@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <a href="{{route('user.appliedconsult')}}" class="btn btn-primary">Daftar Baru</a>
                <div class="card mt-4 ">
                    <div class="card-header pb-0" style="background-color: #90a9d6";>
                        <h6>PERMOHONAN KHIDMAT NASIHAT</h6>
                    </div>
                    <div class="card-body p-3">
                        <table class="table table-bordered">
                            <thead class="text-center" style="background-color: #90a9d6">
                                <tr>
                                    <th>Bil</th>
                                    <th>KP/Nama Pasangan</th>
                                    <th>Status</th>
                                    <th>Operasi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center" style="background-color: #fff">
                                <tr>
                                    <td>1.</td>
                                    <td>{{auth()->user()->name}}</td>
                                    <td>Ada Rekod</td>
                                    <td >
                                        <a href="{{route('user.ViewInformation')}}" class="btn btn-primary">Papar</a>
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
