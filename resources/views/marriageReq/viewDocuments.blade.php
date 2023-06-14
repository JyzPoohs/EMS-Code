@extends('layouts.staffProfile')

@section('content')
<div class="card mt-3">
    <div class="card-header text-center" style="background-color: #7abdbd";>
        <h3>Document</h3>
    </div>
    <div class="card-body" style="background-color: #e2fbfb";>
        <div class="row">
            <label class="col-md-4" for="">Nama Pemohon: </label> 
            <p class="col-md-4" name="">{{"SITI BINTI ABU BAKAR"}}</p>
        </div>
        <div class="row">
            <label class="col-md-4" for="">Nama Pasangan: </label> 
            <p class="col-md-4" name="">{{"MOHD YUNOS BIN MAN"}}</p>
        </div>
        <div class="row">
            <label class="col-md-4" for="">No. Slip Permohonan Online: </label> 
            <p class="col-md-4" name="">{{"KTN1M4/2022-00011"}}</p>
        </div>
        <div class="row">
               <label class="col-md-4" for="">Status Permohonan: </label> 
               <p class="col-md-4" name="">{{"LULUS"}}</p>
        </div>

        <h3 class="text-center mt-2">DOKUMEN</h3>
        <table class="table table-bordered" style="border: blue; background-color: white">
            <tr>
                <td>
                    Senarai Semak
                </td>
                <td class="text-center">
                    <a href="#" onclick="window.print()">
                        <i class="fas fa-print"></i>
                    </a>
                </td>
                
            </tr>
            <tr>
                <td>
                    Borang 2 [Seksyen 16]-Permohonan untuk Kebenaran Berkahwin
                </td>
                <td class="text-center">
                    <a href="#" onclick="window.print()">
                        <i class="fas fa-print"></i>
                    </a>
                </td>
                
            </tr>
            <tr>
                <td>
                    Borang 4 [Seksyen 13]-Persetujuan dan Wakalah Wali
                </td>
                <td class="text-center">
                    <a href="#" onclick="window.print()">
                        <i class="fas fa-print"></i>
                    </a>
                </td>
                
            </tr>
            <tr>
                <td>
                    Borang 1 [Seksyen 13]-Akuan Permastautin
                </td>
                <td class="text-center">
                    <a href="#" onclick="window.print()">
                        <i class="fas fa-print"></i>
                    </a>
                </td>
                
            </tr>
            <tr>
                <td>
                    Borang Ujian Saringan HIV Permohonan
                </td>
                <td class="text-center">
                    <a href="#" onclick="window.print()">
                        <i class="fas fa-print"></i>
                    </a>
                </td>
                
            </tr>
            <tr>
                <td>
                    Bukti Pembayaran
                </td>
                <td class="text-center">
                    <a href="#" onclick="window.print()">
                        <i class="fas fa-print"></i>
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