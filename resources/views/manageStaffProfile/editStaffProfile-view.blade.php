@extends('layouts.staffProfile')

@section('content')
    @if (session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}</div>
    @endif

    <form action="{{ route('staff.updateStaffProfile', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row mt-4" style="background-color: #9ED5C5;">
            <h4 class="font-weight-bold mx-auto mt-2" style="width: fit-content;">Staff Profile</h4>
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
                <td><input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                        id="name" value="{{ strtoupper($user['name']) }}">
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
                <td>
                    <div class="form-group">
                        <select class="form-select " name="department">
                            <option disabled selected>Select department</option>
                            <option value="MARRIAGE REQUEST" @if ($user['department'] == 'MARRIAGE REQUEST') selected @endif>MARRIAGE
                                REQUEST</option>
                            <option value="MARRIAGE REGISTER" @if ($user['department'] == 'MARRIAGE REGISTER') selected @endif>MARRIAGE
                                REGISTER</option>
                            <option value="MARRIAGE COURSE" @if ($user['department'] == 'MARRIAGE COURSE') selected @endif>MARRIAGE
                                COURSE</option>
                            <option value="CARD NIKAH" @if ($user['department'] == 'CARD NIKAH') selected @endif>CARD NIKAH</option>
                            <option value="INCENTIVE" @if ($user['department'] == 'INCENTIVE') selected @endif>INCENTIVE</option>
                            <option value="CONSULTATION" @if ($user['department'] == 'CONSULTATION') selected @endif>CONSULTATION
                            </option>
                            <option value="SYSTEM MANAGEMENT" @if ($user['department'] == 'SYSTEM MANAGEMENT') selected @endif>SYSTEM
                                MANAGEMENT</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <th>PAID</th>
                <td>*:</td>
                <td>
                    <div class="form-group">
                        <select class="form-select" name="paid">
                            <option disabled selected>Select PAID</option>
                            <option value="paid pekan" @if (strtoupper($user['paid']) == 'PAID PEKAN') selected @endif>PAID PEKAN</option>
                            <option value="paid kuantan" @if (strtoupper($user['paid']) == 'PAID KUANTAN') selected @endif>PAID KUANTAN
                            </option>
                            <option value="paid rompin" @if (strtoupper($user['paid']) == 'PAID ROMPIN') selected @endif>PAID ROMPIN
                            </option>
                            <option value="paid muadzam" @if (strtoupper($user['paid']) == 'PAID MUADZAM SHAH') selected @endif>PAID MUADZAM
                                SHAH</option>
                            <option value="paid maran" @if (strtoupper($user['paid']) == 'PAID MARAN') selected @endif>PAID MARAN
                            </option>
                            <option value="paid jengka" @if (strtoupper($user['paid']) == 'PAID JENGKA') selected @endif>PAID JENGKA
                            </option>
                            <option value="paid barat" @if (strtoupper($user['paid']) == 'PAID KUANTAN BARAT') selected @endif>PAID KUANTAN
                                BARAT</option>
                            <option value="paid temerloh" @if (strtoupper($user['paid']) == 'PAID TEMERLOH') selected @endif>PAID TEMERLOH
                            </option>
                            <option value="paid bentong" @if (strtoupper($user['paid']) == 'PAID BENTONG') selected @endif>PAID BENTONG
                            </option>
                            <option value="paid jerantut" @if (strtoupper($user['paid']) == 'PAID JERANTUT') selected @endif>PAID JERANTUT
                            </option>
                            <option value="paid raub" @if (strtoupper($user['paid']) == 'PAID RAUB') selected @endif>PAID RAUB</option>
                            <option value="paid lipis" @if (strtoupper($user['paid']) == 'PAID KUALA LIPIS') selected @endif>PAID KUALA LIPIS
                            </option>
                            <option value="paid bera" @if (strtoupper($user['paid']) == 'PAID BERA') selected @endif>PAID BERA</option>
                            <option value="paid cameron" @if (strtoupper($user['paid']) == 'PAID CAMERON HIGHLAND') selected @endif>PAID CAMERON
                                HIGHLAND</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <th>Access Category</th>
                <td>*:</td>
                <td>
                    <div class="form-group">
                        <select class="form-select" name="accessCategory">
                            <option disabled selected>Select access category</option>
                            <option value="ADMINISTRATOR" @if ($user['accessCategory'] == 'ADMINISTRATOR') selected @endif>ADMINISTRATOR
                            </option>
                            <option value="STAFF" @if ($user['accessCategory'] == 'STAFF') selected @endif>STAFF</option>
                        </select>
                    </div>

                </td>
            </tr>
            <tr>
                <th>Position</th>
                <td>*:</td>
                <td>
                    <div class="form-group">
                        <select class="form-select" name="position">
                            <option disabled selected>Select position</option>
                            <option value="MARRIAGE REQUEST OFFICER" @if ($user['position'] == 'MARRIAGE REQUEST OFFICER') selected @endif>
                                MARRIAGE REQUEST OFFICER</option>
                            <option value="MARRIAGE COURSE OFFICER" @if ($user['position'] == 'MARRIAGE COURSE OFFICER') selected @endif>
                                MARRIAGE COURSE OFFICER</option>
                            <option value="MARRIAGE REGISTER OFFICER" @if ($user['position'] == 'MARRIAG REGISTER OFFICER') selected @endif>
                                MARRIAGE REGISTER OFFICER</option>
                            <option value="MARRIAGE COORDINATOR" @if ($user['position'] == 'MARRIAGE COORDINATOR') selected @endif>
                                MARRIAGE COORDINATOR</option>
                            <option value="MARRIAGE COUNSELOR" @if ($user['position'] == 'MARRIAGE COUNSELOR') selected @endif>'MARRIAGE
                                COUNSELOR</option>
                            <option value="MARRIAGE ADMINISTRATOR" @if ($user['position'] == 'MARRIAGE ADMINISTRATOR') selected @endif>
                                MARRIAGE ADMINISTRATOR</option>
                        </select>
                    </div>

                </td>
            </tr>
            <tr>
                <th>Email</th>
                <td>*:</td>
                <td>
                    <input class="form-control @error('email') is-invalid @enderror" type="text" name="email"
                        id="email" value="{{ $user['email'] }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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
                <td>
                    <div class="form-group">
                        <input type="text" hidden name="requestStatus" value="{{$user['status']}}">
                        <select class="form-select" name="status">
                            <option disabled selected>Select status</option>
                            <option value="APPROVE" @if ($user['status'] == 'APPROVE') selected @endif>APPROVE</option>
                            <option value="REJECT" @if ($user['status'] == 'REJECT') selected @endif>REJECT</option>
                            <option value="PENDING" @if ($user['status'] == 'PENDING') selected @endif>PENDING</option>
                        </select>
                    </div>
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
