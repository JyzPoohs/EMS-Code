<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

@extends('layouts.userProfile')

@section('content')
<div class="card mt-3">
    <div class="card-header text-center" style="background-color: #819CCE";>
        <h3>Document</h3>
    </div>
    <div class="card-body" style="background-color: white";>
        <div class="row">
            <label class="col-md-4" for="">Nama Pemohon: </label> 
            <p class="col-md-4" name="">{{"HADI BIN EFFIZ"}}</p>
        </div>
        <div class="row">
            <label class="col-md-4" for="">Nama Pasangan: </label> 
            <p class="col-md-4" name="">{{"SITI BINTI ABU BAKAR"}}</p>
        </div>
        <div class="row">
            <label class="col-md-4" for="">No. Slip Permohonan Online: </label> 
            <p class="col-md-4" name="">{{"KTN1M4/2022-00011"}}</p>
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

        <h3 class="text-center mt-2">MUAT NAIK DOKUMEN</h3>
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
                    Borang 2 [Seksyen 16]-Permohonan untuk Kebenaran Berkahwin
                </td>
                <td class="text-center">
                    <a   href="#">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </a>
                </td>
                
            </tr>
            <tr>
                <td>
                    Borang 4 [Seksyen 13]-Persetujuan dan Wakalah Wali
                </td>
                <td class="text-center">
                    <a   href="#">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </a>
                </td>
                
            </tr>
            <tr>
                <td>
                    Borang 1 [Seksyen 13]-Akuan Permastautin
                </td>
                <td class="text-center">
                    <a   href="#">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </a>
                </td>
                
            </tr>
            <tr>
                <td>
                    Borang Ujian Saringan HIV Permohonan
                </td>
                <td class="text-center">
                    <a   href="#">
                        <i class="fas fa-cloud-upload-alt"></i>
                    </a>
                </td>
                
            </tr>
        </table>
        <div class="d-flex justify-content-between">
                <div class="text-left">
                    <a href="{{ route('user.FormMarriage') }}" class="btn btn-primary"
                        style="background-color: #0050d1; border:none; color: white;">KEMBALI</a>
                </div>
            <div class="text-centre">
                <a href="{{ route('user.requestMarriageUser') }}" class="btn btn-primary"
                    style="background-color: #0050d1; border:none; color: white;">SIMPAN</a>
            </div>
            <div class="text-right">
                <a href="#" class="btn btn-primary"
                    style="background-color: #0050d1; border:none; color: white;">HANTAR</a>
            </div>
        </div>
        
    </div>
       
    </div>
</div>
@endsection