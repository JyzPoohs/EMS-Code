@extends('layouts.userProfile')
@section('content')
<div class="card-header pb-0" style="background-color: #66bdba";>
    <h6>MAKLUMAT ADUAN</h6>
</div>
<div class="card-body p-3" style="background-color: #e2fbfb;">

        <break>
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
                <td>: <input type= DATE> </input></td>

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
                <td>: <input type="radio">Lelaki</input>
                <input type="radio">Perempuan</input></td>
            </tr>
        </tbody>
    </table>
    <br>
    <tr>
    <div class="row justify-content-center text-center">
       <div class="col-md-3">
            <a href="{{ route('user.consult') }}" class="btn btn-primary btn-block"
                style="background-color: #179591; border:none; color: white;">BACK</a>

        </div>
        <div class="col-md-3">
            <button class="btn btn-primary btn-block" type="button"
                style="background-color: #179591; border:none; color: white;">SAVE</button>
        </div>
    </div></tr>

</div>
@endsection
