@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mt-4 ">
                    <div class="card-header pb-0" style="background-color: #66bdba";>
                        <h5>SENARAI BELUM DILULUSKAN</h5>
                    </div>
                    <div class="card-body p-3 mt-2">
                        <table class="table table-bordered">
                            <thead class="text-center" style="background-color: #66bdba">
                                <tr>
                                    <th>Bil</th>
                                    <th>KP/Nama Pemohon</th>
                                    <th>No Slip Permohonan</th>
                                    <th>Tarikh Mohon</th>
                                    <th>Status</th>
                                    <th>Operasi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center" style="background-color: #fff">
                                <tr>
                                    <td>1.</td>
                                    <td>721230087352 <br>SITI JAMILAH</td>
                                    <td>KKNIM2/2023-00001</td>
                                    <td>7/10/2022</td>
                                    <td>BELUM DISAHKAN</td>
                                    <td>
                                        <a href="{{ route('staff.ViewInformation') }}" class="btn btn-success">Papar</a>
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
