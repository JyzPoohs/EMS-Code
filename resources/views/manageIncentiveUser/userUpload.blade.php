@extends('layouts.userProfile')
@section('content')

<style>

div .card-body{
    height: 300px;
    background-color: #F0D7A8;
  }

.btn{
  background-color: #3C79F5;
  color: white;
  padding: 5px 15px;
  border: none;
  border-radius: 25px;
  cursor: pointer;
}
</style>

    <div class="container-fluid py-4" >
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card mb-4">
                <div class="card-header pb-0" style="background-color: #819CCE";>
                    <h6>MEMUAT NAIK DOKUMEN PENTING INSENTIF KHAS</h6>
                </div>
            </div>
        </div>
    </div>

    <form>
        <div class="card-body">
            <div>
            File yang perlu dimuat naik adalah : <br>Salinan K/P*, Penyata Bank*, Akad Nikah*,Borang insentif Khas pasangan pengantin*, Surat dari Majikan(pilihan).
            </div>
            <body>
                <?php
                    echo Form::open(array('url' => '/userUpload','files'=>'true'));
                    echo 'Select the file to upload.';
                    echo Form::file('image');
                    echo Form::submit('Upload File');
                    echo Form::close();
                ?>
            </body>
        </div>

        <label for="file">File</label>
        <input id="file" type="file" />
        <button>Muat Naik</button>

        
    </form><br>
    <div class="row justify-content-center text-center">
            <div class="btn">
                <a href="{{ route('user.userIncentive') }}" class="btn  ">Tutup</a>
            </div>
            
            <div class="btn">
                <a href="{{ route('user.userIncentive') }}" class="btn">Mohon</a>
            </div>
        </div>
@endsection