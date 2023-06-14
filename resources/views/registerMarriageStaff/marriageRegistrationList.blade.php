<link rel="stylesheet" href="{{ asset('css/staff-marriageRegistration.css') }}">
@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0" style="background-color: #66bdba";>
                        <h6>PERMOHONAN PENDAFTARAN NIKAH >> SENARAI PERMOHONAN</h6>
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
                                        <th>Tarikh Terima</th>
                                        <th>Status</th>
                                        <th class="col-md-2">Operasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $counter = 0; @endphp
                                    @foreach ($datas as $data)
                                        @php $counter++; @endphp
                                        <tr>
                                            <td>{{ $counter }}</td>
                                            <td>
                                                MR00{{ $data->MR_ID }}
                                            </td>
                                            <td>
                                                {{ $data->mohon->U_IC_No }} <br> {{ strtoupper($data->mohon->user->name) }}
                                            </td>
                                            <td>
                                                {{ $data->mohon->Pasangan_IC_No }} <br> {{ strtoupper($data->mohon->P_Name) }}
                                            </td>
                                            <td>
                                                {{ $data['created_at']->format('Y/m/d') }}
                                            </td>
                                            <td>
                                                {{ $data->MR_Approval_Status }}
                                            </td>
                                            <td>
                                                <a href="{{ route('staff.eFormsGrooms') }}" class="btn btn-warning"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger"
                                                    onclick="return confirm('Confirm to delete?')"><i
                                                        class="fas fa-trash-alt"></i></a>
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
