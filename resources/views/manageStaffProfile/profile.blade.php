@extends('layouts.staffProfile')

@section('content')
    <form action="">
        <div class="row mt-4" style="background-color: #DDFFBB;">
            <h4 class="font-weight-bold mx-auto mt-2" style="width: fit-content;">Profile</h4>
        </div>
        <table class="table mt-3">
            <tr>
                <th class="col-md-4">IC Number</th>
                <td>:</td>
                <td>{{ Auth::guard('staff')->user()->ic }}</td>
            </tr>
            <tr>
                <th>Name*</th>
                <td>:</td>
                <td><input class="form-control" type="text" name="name" id="name"
                        value="{{ strtoupper(Auth::guard('staff')->user()->name) }}"></td>
            </tr>
            <tr>
                <th>Department</th>
                <td>:</td>
                <td>{{ strtoupper(Auth::guard('staff')->user()->department) }}</td>
            </tr>
            <tr>
                <th>Access Category</th>
                <td>:</td>
                <td>{{ strtoupper(Auth::guard('staff')->user()->accessCategory) }}</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>:</td>
                <td>{{ strtoupper(Auth::guard('staff')->user()->position) }}</td>
            </tr>
            <tr>
                <th>PAID</th>
                <td>:</td>
                <td>{{ strtoupper(Auth::guard('staff')->user()->paid) }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>:</td>
                <td>
                    <input class="form-control" type="email" name="email" id="email"
                        value="{{ Auth::guard('staff')->user()->email }}">
                </td>
            </tr>
        </table>
        <input class="btn" style="float: right;background-color:#2763C6; color:white; border-radius:25px" type="submit"
            value="Edit Profile">
    </form>
@endsection
