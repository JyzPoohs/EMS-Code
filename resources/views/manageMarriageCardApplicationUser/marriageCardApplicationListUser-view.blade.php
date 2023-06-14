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
                        <a href="{{ route('user.editMarriageCardAppInfo', ['id' => auth()->user()->ic]) }}"
                            class="btn btn-primary" style="background-color: #0050d1; border:none; color: white;">Daftar
                            Baru</a>
                    </div>
                </div>
                <table class="table mt-3" id="list">
                    <thead>
                        <tr>
                            <th>Bil</th>
                            <th>Marriage Card No</th>
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
                                {{-- {{dd($data)}} --}}
                                <td>{{ $counter }}</td>
                                <td>MC00{{ $data->MR_Card_ID }}</td>
                                <td>{{ $data->U_IC_No }} <br>
                                    {{ strtoupper($eform->user->name) }}</td>
                                <td>{{ $eform->Pasangan_IC_No }} <br>
                                    {{ $eform->P_Name }}</td>
                                <td>{{ $data->created_at->format('Y/m/d') }}</td>
                                <td>{{ $data->Card_App_Approval_Status }}</td>
                                <td>
                                    <a href="{{ route('user.viewMarriageCardAppInfo', ['id' => $data->MR_Card_ID]) }}"
                                        class="btn btn-primary">
                                        <i class="fas fa-pencil-alt"></i></a>
                                    <form id="delete-form-{{ $data->MR_Card_ID }}"
                                        action="{{ route('user.deleteMarriageCardApp', $data->MR_Card_ID) }}"
                                        method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>

                                    <a href="#" class="btn btn-danger"
                                        onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this record?')) { document.getElementById('delete-form-{{ $data->MR_Card_ID }}').submit(); }">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
