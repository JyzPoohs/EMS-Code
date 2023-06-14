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
                                    @foreach (array_map(null, $datas->toArray(), $eforms->toArray(),$registers->toArray()) as [$data, $eform,$register])
                                        @php $counter++;
                                        // $eform = $eforms[$key]; 
                                        @endphp
                                        <tr>
                                            <td>{{ $counter }}</td>
                                            <td>{{ $data['MR_Card_ID'] }}</td>
                                            <td>{{ $register['MR_ID'] }}</td>
                                            <td>{{ $data['U_IC_No'] }} <br>
                                                {{ strtoupper($eform['U_Name']) }}</td>
                                            <td>{{ $eform['Pasangan_IC_No'] }} <br>
                                                {{ $eform['P_Name'] }}</td>
                                            <td>{{ $data['created_at']}}</td>
                                            <td>{{ $data['Card_App_Approval_Status'] }}</td>
                                            <td>
                                                <a href="{{ route('staff.approveMarriageCardApp', ['id' => $data['MR_Card_ID']]) }}"
                                                    class="btn btn-primary">
                                                    <i class="fas fa-pencil-alt"></i></a>
                                                <form id="delete-form-{{ $data['MR_Card_ID'] }}"
                                                    action="{{ route('user.deleteMarriageCardApp', $data['MR_Card_ID']) }}"
                                                    method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>

                                                <a href="#" class="btn btn-danger"
                                                    onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this record?')) { document.getElementById('delete-form-{{ $data['MR_Card_ID'] }}').submit(); }">
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

            </div>

        </div>

    </div>
@endsection
