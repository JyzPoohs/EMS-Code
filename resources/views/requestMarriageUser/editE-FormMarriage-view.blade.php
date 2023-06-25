@extends('layouts.userProfile')

@section('content')
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card-header pb-0" style="background-color: #819CCE";>
                    <h6>MAKLUMAT PERKAHWINAN</h6>
                </div>
                <br>
                <div class="card-header pb-0" style="background-color: #D9D9D9";>
                    <h6>MAKLUMAT PERKAHWINAN</h6>
                </div>
                <div class="card mb-4">
                    <div class="card-body p-3" style="background-color: #ECF3FF";>
                        <table>
                            <tbody>

                                <tr>
                                    <td>Nama Pemohon</td>
                                    <td>: ALI BIN IDRIS</td>
                                </tr>
                                <tr>
                                    <td>Nama Pasangan</td>
                                    <td>: SITI BIN ABU</td>
                                </tr>
                                <tr>
                                    <td>Tarikh Mohon</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Tempat Kahwin</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Negara</td>
                                    <td>: 
                                        <select>
                                            <option value="MALAYSIA">MALAYSIA</option>
                                            <option value="SINGAPURA">SINGAPURA</option>
                                            <option value="INDONESIA">INDONESIA</option>
                                            <option value="THAILAND">THAILAND</option>
                                            <option value="BRUNEI">BRUNEI</option>
                                        </select>
                                    </td>
                               </tr>
                               <tr>
                                <td>Negeri</td>
                                <td>: 
                                    <select>
                                        <option value="PAHANG">PAHANG</option>
                                        <option value="KELANTAN">KELANTAN</option>
                                        <option value="TERENGGANU">TERENGGANU</option>
                                        <option value="PERLIS">PERLIS</option>
                                        <option value="KEDAH">KEDAH</option>
                                        <option value="PENANG">PENANG</option>
                                        <option value="PERAK">PERAK</option>
                                        <option value="SELANGOR">SELANGOR</option>
                                        <option value="KUALA LUMPUR">KUALA LUMPUR</option>
                                        <option value="MELAKA">MELAKA</option>
                                        <option value="JOHOR">JOHOR</option>
                                        <option value="SABAH">SABAH</option>
                                        <option value="SARAWAK">SARAWAK</option>    
                                    </select>
                                </td>
                           </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-header pb-0" style="background-color: #D9D9D9";>
                        <h6>MAKLUMAT CADANGAN MAJLIS AKAD NIKAH</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #ECF3FF";>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Tarikh Akad Nikah</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Alamat Tempat Kahwin</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td> 
                                    
                                </tr>
                                <tr>
                                    <td>Jenis Mas Kahwin</td>
                                    <td>: 
                                        <select>
                                            <option value="TUNAI">TUNAI</option>
                                            <option value="ATAS TALIAN">ATAS TALIAN</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Mas Kahwin</td>
                                    <td>: RM <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Hantaran</td>
                                    <td>: RM <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-header pb-0" style="background-color: #D9D9D9";>
                        <h6>MAKLUMAT WALI</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #ECF3FF";>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Nama Wali</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Kad Pengenalan Wali</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Alamat Wali</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Tarikh Lahir</td>
                                    <td>: <input type="date" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Umur Wali</td>
                                    <td>: <input type="number" id="name" name="name" placeholder=""> TAHUN</td>
                                </tr>
                                <tr>
                                    <td>No. Telefon Wali</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Hubungan</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Tarikh Nikah Ibu Bapa</td>
                                    <td>: <input type="date" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Sijil Nikah Ibu Bapa</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Nama Pelulus (Surat Sumpah)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-header pb-0" style="background-color: #D9D9D9";>
                        <h6>MAKLUMAT SAKSI</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #ECF3FF";>
                        <table>
                            <tbody>
                                <tr>
                                    <td>Nama Saksi (1)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Kad Pengenalan Saksi (1)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Umur Saksi (1)</td>
                                    <td>: <input type="number" id="name" name="name" placeholder=""> TAHUN</td>
                                </tr>
                                <tr>
                                    <td>Alamat Saksi (1)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Telefon Saksi (1)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Nama Saksi (2)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Kad Pengenalan Saksi (2)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>Umur Saksi (2)</td>
                                    <td>: <input type="number" id="name" name="name" placeholder=""> TAHUN</td>
                                </tr>
                                <tr>
                                    <td>Alamat Saksi (2)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>No. Telefon Saksi (2)</td>
                                    <td>: <input type="text" id="name" name="name" placeholder=""></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="card-header pb-0" style="background-color: #D9D9D9";>
                        <h6>PEMBAYARAN</h6>
                    </div>
                    <div class="card-body p-3" style="background-color: #ECF3FF";>
                        <table>
                            <tbody>
                                <tr>
                                    <body>
                                        <form action="/upload" method="POST" enctype="multipart/form-data">
                                          <label for="document">Bukti Pembayaran:</label>
                                          <input type="file" id="document" name="document">
                                      
                                          <button type="submit">Upload</button>
                                        </form>
                                      </body>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <div class="row justify-content-center text-center">
                            <div class="col-md-3">
                                <a href="{{ route('user.FormBrides') }}" class="btn btn-primary btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">BACK</a>
                            </div>
                            <div class="col-md-3">
                                <a href="#" class="btn btn-primary btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">SAVE</a>
                            </div>
                            <div class="col-md-3">
                                <a href="{{ route('user.Document') }}" class="btn btn-primary btn-block" class="btn btn-primary btn-block"
                                    style="background-color: #0050d1; border:none; color: white;">NEXT</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>
@endsection
