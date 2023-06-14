@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0" style="background-color: #66bdba";>
                        <h6>SENARAI KURSUS KAHWIN</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #e2fbfb";>                     
                        <div class="mt-2">
                            <table class="table w-100" >
                                <thead>
                                    <tr>
                                        <th>Bil</th>
                                        <th>Penganjur</th>
                                        <th>Alamat</th>
                                        <th>Tarikh</th>
                                        <th>Kapasiti</th>
                                        <th class="col-md-2">Operasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            PUSAT KEUSAHAWANAN & PEMBANGUNAN INSAN</td>
                                        <td>LOT 321, TINGKAT 2, MEDAN MARA 50300 KUALA LUMPUR</td>
                                        <td>15/1/2023 hingga 16/1/2023</td>
                                        <td>20/100</td>
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
                        <br>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">
                                <a href="{{ route('staff.editEPrepCourseInformation') }}" class="btn btn-primary btn-block"
                                    style="background-color: #179591; border:none; color: white;">TAMBAH</a>
                            </div>

                        </div>
                    </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
