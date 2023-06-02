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


                        {{-- <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No. K/P Suami</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No. K/P Isteri</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No. Pendaftaran</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No. Akuan Terima</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="row align-items-center">
                            <div class="col-md-3 d-flex align-items-end">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Kategori</label>
                                    <select class="form-control">
                                        <option value="option1">UNTUK DILULUSKAN</option>
                                        <option value="option2">LULUS</option>
                                        <option value="option3">GAGAL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex align-items-end">
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
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Bulan (Terima)</label>
                                    <select class="form-control">
                                        <option value="option1">JANUARI</option>
                                        <option value="option2">FEBUARI</option>
                                        <option value="option3">MAC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex align-items-end">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tahun (Terima)</label>
                                    <select class="form-control">
                                        <option value="option1">2023</option>
                                        <option value="option2">2022</option>
                                        <option value="option3">2021</option>
                                        <option value="option3">2020</option>
                                    </select>
                                </div>
                            </div>
                        </div> --}}
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
                                    <tr>
                                        <td>1</td>
                                        <td>(PN)MS/0077/
                                            2022-D1-
                                            SN06220001</td>
                                        <td>870930065551<br>
                                            ALI BIN IDRIS</td>
                                        <td>890930065551 <br>
                                            SITI BINTI ABU BAKAR</td>
                                        <td>KTN1M4/2022-00011</td>
                                        <td>15/12/2022</td>
                                        <td>LULUS</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">
                                                <i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="#" class="btn btn-danger"
                                                onclick="return confirm('Confirm to delete?')"><i
                                                    class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
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
