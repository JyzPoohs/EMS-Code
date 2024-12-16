@extends('layouts.userProfile')
@section('content')
    <style>
        div .card-body {
            height: 300px;
            background-color: #F0D7A8;
        }

        .btn {
            background-color: #3C79F5;
            color: white;
            padding: 5px 15px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
        }
    </style>

    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                    <div class="card-header pb-0" style="background-color: #819CCE";>
                        <h6>MEMUAT NAIK DOKUMEN PENTING INSENTIF KHAS</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div>
                File yang perlu dimuat naik adalah: <br>
                Salinan K/P*, Penyata Bank*, Akad Nikah*, Borang insentif Khas pasangan pengantin*, Surat dari Majikan
                (pilihan).
            </div>
            <form action="/userUpload" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Select the file to upload</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Muat Naik</button>
            </form>
        </div>

        <div class="row justify-content-center text-center mt-2">
            <div class="btn mr-2">
                <a href="{{ route('user.userIncentive') }}" class="btn  ">Tutup</a>
            </div>

            <div class="btn">
                <a href="{{ route('user.userIncentive') }}" class="btn">Mohon</a>
            </div>
        </div>
    @endsection
