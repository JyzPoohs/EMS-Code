@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0" style="background-color: #66bdba";>
                        <h6>SENARAI PERMOHONAN BERKAHWIN</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #e2fbfb";>
                        <div class="mt-2">
                            <table class="table w-100" id="list">
                                <thead>
                                    <tr>
                                        <th>Bil</th>
                                        <th>No. KP/Nama Isteri</th>
                                        <th>No. AKaun Terima</th>
                                        <th>Tarikh Mohon</th>
                                        <th>Status</th>
                                        <th class="col-md-2">Operasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>890930065551
                                            SITI BINTI ABU BAKAR</td>
                                        <td>KTN1M4/2022-00011</td>
                                        <td>15/12/2022</td>
                                        <td>BELUM SEMAK</td>
                                        <td>
                                            <a href="{{ route('staff.viewFormGrooms') }}" class="btn btn-primary">
                                                <i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger"
                                                onclick="return confirm('Confirm to delete?')"><i
                                                    class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>    
                                    <tr>
                                        <td>2</td>
                                        <td>850325065551
                                            AMAD BIN ALI</td>
                                        <td>KTN1M6/2022-00025</td>
                                        <td>20/12/2022</td>
                                        <td>BELUM SEMAK</td>
                                        <td>
                                            <a href="" class="btn btn-primary">
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
