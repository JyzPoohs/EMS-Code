<link rel="stylesheet" href="{{ asset('css/user-marriageRegistration.css') }}">
@extends('layouts.userProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="card mb-4">
            <div class="card-header pb-0" style="background-color: #819CCE">
                <h6>PENDAFTARAN PERKHAWINAN >> PERMOHONAN SIJIL DAN KAD NIKAH</h6>
            </div>
            <div class="card-body p-3" style="background-color: #ECF3FF">
                <div class="row justify-content-center text-center">
                    <div class="col-md-3">
                        <a href="{{ route('user.editMarriageCardAppInfo', ['id' => auth()->user()->ic]) }}" class="btn btn-primary"
                            style="background-color: #0050d1; border:none; color: white;">Daftar Baru</a>
                    </div>
                </div>
                <table class="table mt-3" id="list">
                    <thead>
                        <tr>
                            <th>Bil</th>
                            <th>No. Pendaftaran/Sijil</th>
                            <th>No. K/P Nama Suami</th>
                            <th>No. K/P Nama Isteri</th>
                            <th>Tarikh Mohon</th>
                            <th>Status</th>
                            <th class="col-md-4">Operasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $counter = 0; @endphp
                        @foreach ($datas as $data)
                            @php $counter++; @endphp
                            <tr>
                                <td>{{ $counter }}</td>
                                <td>{{ $data->user->daftar->MR_noDaftarSijil }}</td>
                                <td>{{ $data->U_IC_No }} <br>
                                    {{ strtoupper($data->user->name) }}</td>
                                <td>{{ $data->user->daftar->MR_isteri_ic }} <br>
                                    {{ $data->user->daftar->MR_isteri_nama }}</td>
                                <td>{{ $data->created_at->format('Y/m/d') }}</td>
                                <td>{{ $data->user->daftar->MR_Status }}</td>
                                <td>
                                    <a href="{{ route('user.viewMarriageCardAppInfo', ['id' => auth()->user()->ic]) }}"
                                        class="btn btn-primary">
                                        <i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="#" class="btn btn-danger"
                                        onclick="return confirm('Confirm to delete?')"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
