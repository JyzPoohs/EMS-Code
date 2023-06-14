@extends('layouts.userProfile')
@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style>
    div .card-body{
    height: 300px;
    background-color: #F0D7A8;
  }

  div .table .thead .tr .th{
    background-color: #2D67C7;
  }

</style>

<div class="container-fluid py-4" >
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card mb-4">
            <div class="card-header pb-0" style="background-color: #819CCE";>
                <h6>STATUS PERMOHONAN INSENTIF KHAS PASANGAN PENGANTIN</h6>
            </div>
            
        </div>
    </div>
</div>



<div class="card-body">
    <div class="mt-2">
        <table class="table w-100" id="list">
            <thead>
                <tr>
                    <th>Bil</th>
                    <th>No. KP</th>
                    <th>Nama</th>
                    <th>Tarikh</th>
                    <th>Status</th>
                    <th class="col-md-2">Laporan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>890930065551</td>
                    <td>SITI BINTI ABU BAKAR</td>
                    <td>15/12/2022</td>
                    <td>TELAH HANTAR</td>
                    <td>
                        <a href="{{ route('user.eFormsGrooms') }}" class="btn btn-info btn-xs">
                        <i class="material-icons" style="font-size:15px">file_download</i></a>
                    </td>
                </tr>                             
            </tbody>
        </table>
    </div>
</div>

@endsection