@extends('layouts.userProfile')
@section('content')

<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card mb-4">
                <div class="card-header pb-0" style="background-color: #66bdba";>
                    <h6>PERMOHONAN KHIDMAT NASIHAT</h6>
                </div>
                <div class="card-body p-3" style="background-color: #e2fbfb;">
                    <tr>Nombor Kad Pengenalan Pasangan:  <input></input> <button>SEMAK</button>
                        <break>
                        </div>

                        <div class="mt-2">
                            <table class="table w-100" id="list">
                                <thead>
                                    <tr>
                                        <th>Bil</th>

                                        <th>No. K/P Nama Suami</th>
                                        <th>Status</th>
                                        <th class="col-md-2">Operasi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>

                                        <td>:  {{ auth()->user()->name }}</td>


                                        <td>UNTUK DILULUSKAN</td>
                                        <td>
                                            <a href=""{{ route('user.ViewInformation') }}"" class="btn btn-primary">
                                                <i class="fas fa-eye"></i></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>

            </div>
        </div>

    </div>
    <div class="col-md-5">
        <a href="{{ route('user.CreateComplaint') }}">
        <button class="btn btn-primary btn-block" type="button"style="background-color: #179591; border:none; color: white;"> MOHON KHIDMAT NASIHAT</button>
    </div>

</div>
@endsection
