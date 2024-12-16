@extends('layouts.staffProfile')

@section('content')
<div class="col-lg-12 mb-lg-0 mb-4">
    <div class="card mt-4
<div class="card-header pb-0" style="background-color: #66bdba";>
    <h6>KEMASKINI KAUNSELOR TERLIBAT</h6>
</div>
<div class="card-body p-3" style="background-color: #e2fbfb;">
    <table>
        <tbody>

            <tr style="background-color: #ffffff00;">
                <td>Tarikh Konsultasi</td>
                <td>: 30-05-2023</td>

            <tr style="background-color: #ffffff00;">
                <td>PAID Pilihan</td>
                <td>:
                    PAID Pekan
                </td>
            </tr>

            <tr style="background-color: #ffffff00;">
                <td>Kounselor Terlibat</td>
                <td>: Encik Othman bin Razak</td>
            </tr>
        </tbody>
    </table>

</div>

</div>

<div class="col-md-3">
<a href="{{route('staff.ConsultationApplicationList')}}" class="btn btn-success">KEMBALI</a>
</div>
@endsection
