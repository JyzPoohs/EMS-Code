<link rel="stylesheet" href="{{ asset('css/staff-marriageRegistration.css') }}">
@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0" style="background-color: #66bdba";>
                        <h6>PERMOHONAN SIJIL DAN KAD >> SENARAI PERMOHONAN</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #e2fbfb";>
                        <div class="mt-2">
                            <table class="table w-100" id="list">
                                <thead>
                                    <tr>
                                        <th>Bil</th>
                                        <th>Marriage Card No</th>
                                        <th>No. KP/Nama Suami</th>
                                        <th>No. KP/Nama Isteri</th>
                                        <th>Tarikh Terima</th>
                                        <th>Status</th>
                                        <th class="col-md-2">Operasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $counter = 0; @endphp
                                    @foreach ($datas as $data)
                                        @php $counter++;
                                        // $data->registration->mohon = $data->registration->mohons[$key]; 
                                        @endphp
                                        <tr>
                                            <td>{{ $counter }}</td>
                                            <td>MC{{ $data->MR_Card_ID }}</td>
                                            <td>{{ $data->U_IC_No }} <br>
                                                {{ strtoupper($data->registration->mohon->user->name) }}</td>
                                            <td>{{ $data->registration->mohon->Pasangan_IC_No }} <br>
                                                {{ $data->registration->mohon->P_Name }}</td>
                                            <td>{{ $data->created_at->format('Y/m/d')}}</td>
                                            <td>{{ $data->Card_App_Approval_Status }}</td>
                                            <td>
                                                <a href="{{ route('staff.approveMarriageCardApp', ['id'=> $data->MR_Card_ID]) }}"
                                                    class="btn btn-primary">
                                                    <i class="fas fa-pencil-alt"></i></a>
                                                {{-- <form id="delete-form-{{ $data->MR_Card_ID }}"
                                                    action="{{ route('staff.deleteMarriageCardApp', $data->MR_Card_ID) }}"
                                                    method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>

                                                <a href="#" class="btn btn-danger"
                                                    onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this record?')) { document.getElementById('delete-form-{{ $data->MR_Card_ID }}').submit(); }">
                                                    <i class="fa fa-trash"></i>
                                                </a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>


                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
