@extends('layouts.staffProfile')

@section('content')
    <form action="{{ route('staff.updateUserProfile', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row mt-4" style="background-color: #cbdcf7;">
            <h4 class="font-weight-bold mx-auto mt-2" style="width: fit-content;">User Profile</h4>
        </div>
        <table class="table mt-3">
            <tr>
                <th class="col-md-4">IC Number</th>
                <td>*:</td>
                <td><input class="form-control" type="text" name="ic" id="ic" value="{{ $user->ic }}"></td>
            </tr>
            <tr>
                <th>Name</th>
                <td>*:</td>
                <td><input class="form-control" type="text" name="name" id="name"
                        value="{{ strtoupper($user['name']) }}"></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>:</td>
                <td><input class="form-control" type="text" name="gender" id="gender"
                        value="{{ strtoupper($user['gender']) }}"></td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>*:</td>
                <td><input class="form-control" type="text" name="phone" id="phone" value="{{ $user['phone'] }}">
                </td>
            </tr>
            <tr>
                <th>Email</th>
                <td>*:</td>
                <td><input class="form-control" type="text" name="email" id="email" value="{{ $user['email'] }}">
                </td>
            </tr>
            <tr>
                <th>Date Register</th>
                <td>:</td>
                <td><input disabled class="form-control" type="text" name="date" id="date"
                        value="{{ $user['created_at']->format('Y/m/d') }}"></td>
            </tr>

        </table>
        <a class="btn" style="float: right; background-color: #2763C6; color: white; border-radius: 25px"
            href="{{ route('staff.userProfileList') }}">Back</a>
        {{-- <a class="btn" style="float: right; background-color: #2763C6; color: white; border-radius: 25px"
            href="{{ route('staff.userProfielList') }}">Edit Profile</a> --}}
        <button type="submit" class="btn"
            style="float: right; background-color: #2763C6; color: white; border-radius: 25px"
            onclick="return confirm('Confirm to update?')">Edit Profile</button>


    </form>
@endsection
