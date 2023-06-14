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
                                        <th>No. Pendaftaran /Sijil</th>
                                        <th>No. KP/Nama Suami</th>
                                        <th>No. KP/Nama Isteri</th>
                                        <th>No. AKaun Terima</th>
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
                                            <td>{{ $data->user->daftar->MR_noDaftarSijil }}</td>
                                            <td>{{ $data->U_IC_No }}<br>
                                                {{ strtoupper($data->user->name) }}</td>
                                            <td>{{ $data->user->daftar->MR_isteri_ic }} <br>
                                                {{ $data->user->daftar->MR_isteri_nama }}</td>
                                            <td>KTN1M4/2022-00011</td>
                                            <td>{{ $data['created_at']->format('Y/m/d') }}</td>
                                            <td>{{ $data['Card_App_Approval_Status'] }}</td>
                                            <td>
                                                <a href="{{ route('staff.approveMarriageCardApp', ['id' => $data->MR_Card_ID]) }}"
                                                    class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
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
