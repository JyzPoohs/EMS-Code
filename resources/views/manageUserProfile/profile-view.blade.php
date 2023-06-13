@extends('layouts.userProfile')

@section('content')
    @if (session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif
    <form action="{{ route('user.update', auth()->user()->id) }}" method="post">


        @csrf
        @method('PUT')
        <div class="row mt-4" style="background-color: #cbdcf7;">
            <h4 class="font-weight-bold mx-auto mt-2" style="width: fit-content;">User Profile</h4>
        </div>
        <table class="table mt-3">
            <tr>
                <th class="col-md-4">IC Number</th>
                <td>:</td>
                <td>{{ auth()->user()->ic }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>*:</td>
                <td>
                    <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                        id="name" value="{{ strtoupper(auth()->user()->name) }}">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>

            <tr>
                <th>Gender</th>
                <td>:</td>
                <td>{{ strtoupper(auth()->user()->gender) }}</td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>*:</td>
                <td>{{ auth()->user()->phone }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>*:</td>
                <td>
                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email"
                        id="email" value="{{ auth()->user()->email }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </td>
            </tr>
        </table>
        <input class="btn col-md-2" style="float: right;background-color:#2763C6; color:white; border-radius:25px"
            type="submit" onclick="return confirm('Confirm to update profile?')" value="Edit Profile">
    </form>
@endsection
