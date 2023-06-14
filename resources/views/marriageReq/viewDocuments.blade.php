@extends('layouts.staffProfile')

@section('content')
<div class="card mt-3">
    <div class="card-header text-center" style="background-color: #7abdbd";>
        <h3>Document</h3>
    </div>
    <div class="card-body" style="background-color: #e2fbfb";>
        <div class="row">
            <label class="col-md-4" for="">Nama Pemohon: </label> 
            <p class="col-md-4" name="">{{"aaa"}}</p>
        </div>
        <div class="row">
            <label class="col-md-4" for="">Nama Pasangan: </label> 
            <p class="col-md-4" name="">{{"aaa"}}</p>
        </div>
        <div class="row">
            <label class="col-md-4" for="">No. Slip Permohonan Online: </label> 
            <p class="col-md-4" name="">{{"aaa"}}</p>
        </div>
        <div class="row">
               <label class="col-md-4" for="">Status Permohonan: </label> 
               <p class="col-md-4" name="">{{"aaa"}}</p>
        </div>

        <h3 class="text-center mt-2">DOKUMEN/BORANG DARI PEMOHON</h3>
        <table class="table table-bordered" style="border: blue; background-color: white">
            <tr>
                <td>
                    Slip Permohonan Online
                </td>
                <td class="text-center">
                    <a   href="#">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </a>
                </td>
                
            </tr>
            <tr>
                <td>
                    Slip Permohonan Online
                </td>
                <td class="text-center">
                    <a   href="#">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </a>
                </td>
                
            </tr>
            <tr>
                <td>
                    Slip Permohonan Online
                </td>
                <td class="text-center">
                    <a   href="#">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </a>
                </td>
                
            </tr>
            <tr>
                <td>
                    Slip Permohonan Online
                </td>
                <td class="text-center">
                    <a   href="#">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </a>
                </td>
                
            </tr>
        </table>
        <div class="text-center">
            <a class="btn btn-primary mx-auto" href="{{route('staff.viewFormMarriage')}}">Kembali</a>

        </div>
    </div>
       
    </div>
</div>
@endsection