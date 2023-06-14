@extends('layouts.staffProfile')

@section('content')
    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}</div>
    @endif
    <form action="{{ route('staff.update', Auth::guard('staff')->user()->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="row mt-4"
            style="background-color: {{ Auth::guard('staff')->user()->accessCategory === 'STAFF' ? '#A0D8B3' : '#DDFFBB' }};">
            <h4 class="font-weight-bold mx-auto mt-2" style="width: fit-content;">
                {{ Auth::guard('staff')->user()->accessCategory === 'STAFF' ? 'Staff Profile' : 'Admin Profile' }}
            </h4>
        </div>
        <table class="table mt-3">
            <tr>
                <th class="col-md-4">IC Number</th>
                <td>:</td>
                <td>{{ Auth::guard('staff')->user()->ic }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>*:</td>
                <td><input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name"
                        value="{{ strtoupper(Auth::guard('staff')->user()->name) }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </td>
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
                <td>*:</td>
                <td>
                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email"
                        id="email" value="{{ Auth::guard('staff')->user()->email }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </td>
            </tr>
        </table>
        <input class="btn col-md-2" style="float: right;background-color:#2763C6; color:white; border-radius:25px"
            type="submit" onclick="return confirm('Confirm to update profile?')" value="Edit Profile">
    </form>
@endsection
