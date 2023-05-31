@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>PERMOHONAN PENGESAHAN NIKAH >> SENARAI PERMOHONAN</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #f0f0f0";>

                        <div class="row justify-content-center">
                            <div class="col-md-3">
                                <button class="btn btn-primary" type="button">Daftar Baru</button>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-secondary" type="button">Pengesahan Online</button>
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
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No. K/P Suami</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Input Text</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-primary" type="button">Cari</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
@endsection
