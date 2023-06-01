@extends('layouts.staffProfile')

@section('content')
    <form action="">
        <div class="row mt-4" style="background-color: #9ED5C5;">
            <h4 class="font-weight-bold mx-auto mt-2" style="width: fit-content;">Staff Profile</h4>
        </div>
        <table class="table mt-3">
            <tr>
                <th class="col-md-4">IC Number</th>
                <td>:</td>
                <td>{{ $user->ic }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>:</td>
                <td>{{ strtoupper($user['name']) }}</td>
            </tr>
            <tr>
                <th>Department</th>
                <td>:</td>
                <td>{{ strtoupper($user['department']) }}</td>
            </tr>
            <tr>
                <th>PAID</th>
                <td>:</td>
                <td>{{ strtoupper($user['paid']) }}</td>
            </tr>
            <tr>
                <th>Access Category</th>
                <td>:</td>
                <td>{{ strtoupper($user['accessCategory']) }}</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>:</td>
                <td>{{ strtoupper($user['position']) }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>:</td>
                <td>{{ $user['email'] }}</td>
            </tr>
            <tr>
                <th>Date Register</th>
                <td>:</td>
                <td>{{ $user['created_at']->format('Y/m/d') }}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>:</td>
                <td>{{ strtoupper($user['status']) }}</td>
            </tr>

        </table>
        <a class="btn" style="float: right; background-color: #2763C6; color: white; border-radius: 25px"
            href="{{ route('staff.staffProfileList') }}">Back</a>

    </form>
@endsection
