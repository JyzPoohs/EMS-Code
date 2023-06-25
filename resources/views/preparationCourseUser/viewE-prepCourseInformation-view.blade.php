@extends('layouts.userProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0" style="background-color: #819CCE";>
                        <h6>PERMOHONAN KURSUS KAHWIN</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #ECF3FF";>                     
                        <div class="mt-2">
                            <table class="table w-100" >
                                <thead>
                                    <tr>
                                        <th>Bil</th>
                                        <th>Nama</th>
                                        <th>No. Siri Kursus</th>
                                        <th>Tarikh</th>
                                        <th>Status</th>
                                        <th class="col-md-2">Operasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            SITI BINTI ABU BAKAR</td>
                                        <td>KTN1M4/2022-00011</td>
                                        <td>15/12/2022</td>
                                        <td>SEDANG DIPROSES</td>
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

            </div>

        </div>

    </div>
@endsection
