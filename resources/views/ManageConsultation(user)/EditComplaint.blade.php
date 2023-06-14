@extends('layouts.userProfile')
@section('content')
    <div class="card-header pb-0 mt-3" style="background-color: #90a9d6";>
        <h6>MAKLUMAT ADUAN</h6>
    </div>
    <div class="card-body p-3" style="background-color: #d9e4f9;">
        <table>
            <tbody>
                <tr style="background-color: #ffffff00;">
                    <td>Tujuan Aduan</td>
                    <td>:<input>

                    </td>
                </tr>
                <tr style="background-color: #ffffff00;">
                    <td>Keterangan Aduan</td>
                    <td>:<input type="text" style="height: 100px; width: 400px;"></td>
                </tr>
                <tr style="background-color: #ffffff00;">
                    <td>Tarikh Konsultasi</td>
                    <td>: <input type=DATE></td>

                <tr style="background-color: #ffffff00;">
                    <td>PAID Pilihan</td>
                    <td><select>
                            <option>PAID Pekan</option>
                            <option>PAID Kuantan</option>
                        </select>
                    </td>
                </tr>

                <tr style="background-color: #ffffff00;">
                    <td>Kounselor Pilihan</td>
                    <td>: <input name="gender" type="radio">Lelaki
                        <input name="gender" type="radio">Perempuan
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <tr>
            <div class="row justify-content-center text-center">
                <div class="col-md-3">
                    <a href="{{ route('user.Search') }}" class="btn btn-primary btn-block">BACK</a>

                </div>
                <div class="col-md-3">
                    <button class="btn btn-primary btn-block" type="button">SAVE</button>
                </div>
            </div>
        </tr>

    </div>
@endsection
