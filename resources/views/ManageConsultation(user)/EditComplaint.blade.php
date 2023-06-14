@extends('layouts.userProfile')
@section('content')
<div class="card-header pb-0 mt-3" style="background-color: #90a9d6;">
    <h6>MAKLUMAT ADUAN</h6>
</div>
<div class="card-body p-3" style="background-color: #d9e4f9;">
    <form method="POST" action="{{ route('user.updateInformation') }}">
        @csrf
        <table>
            <tbody>
                <tr style="background-color: #ffffff00;">
                    <td>Tujuan Aduan</td>
                    <td>: <input type="text" name="tujuan_aduan" value="{{ $aduan->tujuan_aduan }}"></td>
                </tr>
                <tr style="background-color: #ffffff00;">
                    <td>Keterangan Aduan</td>
                    <td>: <textarea name="keterangan_aduan" style="height: 100px; width: 400px;">{{ $aduan->keterangan_aduan }}</textarea></td>
                </tr>
                <tr style="background-color: #ffffff00;">
                    <td>Tarikh Konsultasi</td>
                    <td>: <input type="date" name="tarikh_konsultasi" value="{{ $aduan->tarikh_konsultasi }}"></td>
                </tr>
                <tr style="background-color: #ffffff00;">
                    <td>PAID Pilihan</td>
                    <td>
                        <select name="paid_pilihan">
                            <option value="PAID Pekan" @if ($aduan->paid_pilihan === 'PAID Pekan') selected @endif>PAID Pekan</option>
                            <option value="PAID Kuantan" @if ($aduan->paid_pilihan === 'PAID Kuantan') selected @endif>PAID Kuantan</option>
                        </select>
                    </td>
                </tr>
                <tr style="background-color: #ffffff00;">
                    <td>Kounselor Pilihan</td>
                    <td>
                        <input name="kounselor_pilihan" type="radio" value="Lelaki" @if ($aduan->kounselor_pilihan === 'Lelaki') checked @endif>Lelaki
                        <input name="kounselor_pilihan" type="radio" value="Perempuan" @if ($aduan->kounselor_pilihan === 'Perempuan') checked @endif>Perempuan
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <div class="row justify-content-center text-center">
            <div class="col-md-3">
                <a href="{{ route('user.Search') }}" class="btn btn-primary btn-block">BACK</a>
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary btn-block" type="submit">SAVE</button>
            </div>
        </div>
    </form>
</div>
@endsection
