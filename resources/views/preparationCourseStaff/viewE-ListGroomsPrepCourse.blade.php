@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0" style="background-color: #66bdba";>
                        <h6>SENARAI PEMOHON KURSUS KAHWIN</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #e2fbfb";>                     
                        <div class="mt-2">
                            <table class="table w-100" >
                                <thead>
                                    <tr>
                                        <th>BIL</th>
                                        <th>NO K/P</th>
                                        <th>NAMA</th>
                                        <th>NO SIRI KURSUS</th>
                                        <th class="col-md-2">Operasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            890930065551</td>
                                        <td>SITI BINTI ABU BAKAR</td>
                                        <td>KTN1M4/2022-00011</td>
                                        <td>
                                            <a href="{{ route('staff.viewEGroomsInformation') }}" class="btn btn-primary">
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

        </div>

    </div>
@endsection
