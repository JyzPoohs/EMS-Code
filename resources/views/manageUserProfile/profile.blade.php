@extends('layouts.userProfile')

@section('content')
    <form action="">
        <div class="row mt-4" style="background-color: #cbdcf7;">
            <h4 class="font-weight-bold mx-auto mt-2" style="width: fit-content;">User Profile</h4>
        </div>
        <table class="table mt-3">
            <tr>
                <th class="col-md-4">IC Number</th>
                <td>:</td>
                <td>{{ Auth::guard('web')->user()->ic }}</td>
            </tr>
            <tr>
                <th>Name*</th>
                <td>:</td>
                <td><input class="form-control" type="text" name="name" id="name"
                        value="{{ strtoupper(Auth::guard('web')->user()->name) }}"></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>:</td>
                <td>{{ strtoupper(Auth::guard('web')->user()->gender) }}</td>
            </tr>
            <tr>
                <th>Phone Number*</th>
                <td>:</td>
                <td>{{ Auth::guard('web')->user()->phone }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>:</td>
                <td>
                    <input class="form-control" type="email" name="email" id="email"
                        value="{{ Auth::guard('web')->user()->email }}">
                </td>
            </tr>
        </table>
        <input class="btn" style="float: right;background-color:#2763C6; color:white; border-radius:25px" type="submit"
            value="Edit Profile">
    </form>
@endsection
