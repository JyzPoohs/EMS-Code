@extends('layouts.staffProfile')
@section('content')
    <div class="container-fluid py-4">
        @if (Session::has('delete'))
            <div class="alert alert-danger mt-3">{{ Session::get('delete') }}</div>
        @endif
        
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0" style="background-color: #66bdba";>
                        <h6>PERMOHONAN KHAS INSENTIF >> SENARAI PERMOHONAN</h6>
                    </div>
                 </div>
                 <div class="card-body p-3" style="background-color: #F0D7A8";>
                        <div class="mt-2">
                            <table class="table w-100" id="list">
                                <thead>
                                    <tr>
                                        <th>Bil</th>
                                        <th>No. KP</th>
                                        <th>Nama</th>
                                        <th>Tarikh</th>
                                        <th>Status</th>
                                        <th class="col-md-2">Operasi</th>
                                    </tr>
                                </thead>
                                
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection