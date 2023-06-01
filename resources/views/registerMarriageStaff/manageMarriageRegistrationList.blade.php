<link rel="stylesheet" href="{{ asset('css/staff-marriageRegistration.css') }}">

@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0" style="background-color: #66bdba";>
                        <h6>PERMOHONAN PENGESAHAN NIKAH >> SENARAI PERMOHONAN</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #e2fbfb";>

                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">
                                <button class="btn btn-primary btn-block" type="button"
                                    style="background-color: #179591; border:none; color: white;">Daftar Baru</button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-primary btn-block" type="button"
                                    style="background-color: #179591; border:none; color: white;">Pengesahan Online</button>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No. K/P Suami</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No. K/P Isteri</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No. Akaun Terima</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No. K/P Suami</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-4 d-flex align-items-end">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Status</label>
                                    <select class="form-control">
                                        <option value="option1">UNTUK DILULUSKAN</option>
                                        <option value="option2">LULUS</option>
                                        <option value="option3">GAGAL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex align-items-end">
                                <button class="btn btn-primary" type="button"
                                    style="background-color: #179591; border:none; color: white;">Cari</button>
                            </div>
                        </div>
                        <div>
                            <table>
                                <tr>
                                    <td>Bil</td>
                                    <td>No. KP/Nama Suami</td>
                                    <td>No. KP/Nama Isteri</td>
                                    <td>No. AKaun Terima</td>
                                    <td>Tarikh Terima</td>
                                    <td>Status</td>
                                    <td>Operasi</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>870930065551
                                        ALI BIN IDRIS</td>
                                    <td>890930065551
                                        SITI BINTI ABU BAKAR</td>
                                    <td>KTN1M4/2022-00011</td>
                                    <td>15/12/2022</td>
                                    <td>UNTUK DILULUSKAN</td>
                                    <td>edit, print</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
