@extends('layouts.staffProfile')

@section('content')
    @if (session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif

    <form action="{{ route('staff.updateStaffProfile', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row mt-4" style="background-color: #cbdcf7;">
            <h4 class="font-weight-bold mx-auto mt-2" style="width: fit-content;">User Profile</h4>
        </div>
        <table class="table mt-3">
            <tr>
                <th class="col-md-4">IC Number</th>
                <td>*:</td>
                <td><input class="form-control" type="text" name="ic" id="ic" value="{{ $user->ic }}">
                </td>
            </tr>
            <tr>
                <th>Name</th>
                <td>*:</td>
                <td><input class="form-control" type="text" name="name" id="name"
                        value="{{ strtoupper($user['name']) }}"></td>
            </tr>
            <tr>
                <th>Department</th>
                <td>:</td>
                <td><input class="form-control" type="text" name="department" id="department"
                        value="{{ strtoupper($user['department']) }}"></td>
            </tr>
            <tr>
                <th>PAID</th>
                <td>*:</td>
                <td><input class="form-control" type="text" name="paid" id="paid"
                        value="{{ strtoupper($user['paid']) }}">
                </td>
            </tr>
            <tr>
                <th>Access Category</th>
                <td>*:</td>
                <td><input class="form-control" type="text" name="accessCategory" id="accessCategory"
                        value="{{ $user['accessCategory'] }}">
                </td>
            </tr>
            <tr>
                <th>Position</th>
                <td>*:</td>
                <td><input class="form-control" type="text" name="position" id="position"
                        value="{{ strtoupper($user['position']) }}">
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
            <tr>
                <th>Status</th>
                <td>*:</td>
                <td><input class="form-control" type="text" name="status" id="status"
                        value="{{ strtoupper($user['status']) }}">
                </td>
            </tr>

        </table>
        <a class="btn btn-secondary"; style="float: right;  color: white; border-radius: 25px; margin-left:5px"
            href="{{ route('staff.staffProfileList') }}">Back</a>
        <button type="submit" class="btn col-sm-2"
            style="float: right; background-color: #2763C6; color: white; border-radius: 25px"
            onclick="return confirm('Confirm to update profile?')">Edit Profile</button>


    </form>
@endsection
