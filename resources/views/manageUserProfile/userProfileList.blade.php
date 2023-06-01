@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid">

        <div class="mt-4">
            <h2 class="tableHeader text-center mb-3">User Profile List</h2>
            <div class="form-group row">
                <label for="usr" class="col-sm-1 col-form-label">IC:</label>
                <div class="col-sm-5">
                    <input placeholder="Enter IC" type="text" class="form-control" id="ic">
                </div>
                <label for="usr" class="col-sm-1 col-form-label">Name:</label>
                <div class="col-sm-5">
                    <input placeholder="Enter Name" type="text" class="form-control" id="name">
                </div>
            </div>
            <div class="form-group row mt-2">
                <label for="usr" class="col-sm-1 col-form-label">Gender:</label>
                <div class="col-sm-5 pt-2">
                    <label class="radio-inline mr-2">
                        <input type="radio" name="genderRadio" id="male">
                        <span class="ml-2">Male</span>
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="genderRadio" id="female">
                        <span class="ml-2">Female</span>
                    </label>
                </div>
                <label for="usr" class="col-sm-1 col-form-label">Date:</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" id="date">
                </div>
            </div>
            <div>
                <button class="btn mt-2 mb-2 btn-primary"
                    style="float: right; background-color: #2763C6; color: white; border-radius: 25px; width:100px"
                    type="submit">Search</button>
            </div>

            <table class="table table-bordered" id="list">
                <thead>
                    <tr>
                        <th>IC Number</th>
                        <th>Username</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Date Register</th>
                        <th style="width: 160px">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!$users->isEmpty())
                        @php $counter = 0; @endphp
                        @foreach ($users as $user)
                            @php $counter++; @endphp
                            <tr>
                                <td>
                                    {{ $user['ic'] }}
                                </td>
                                <td>

                                    {{ $user['name'] }}
                                </td>
                                <td>

                                    {{ $user['gender'] }}
                                </td>
                                <td>
                                    {{ $user['email'] }}
                                </td>
                                <td>
                                    {{ $user['created_at']->format('Y/m/d') }}
                                </td>
                                <td>
                                    <a href="{{ route('staff.viewUserProfile', ['id' => $user->id]) }}"
                                        class="btn btn-primary">
                                        <i class="fas fa-eye"></i></a>
                                    <a href="{{ route('staff.profileUpdateView', ['id' => $user->id]) }}"
                                        class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{route('staff.destroyUserProfile', ['id' => $user->id])}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                </td>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3" class="align-middle text-center">
                                <p class="text-sm font-weight-bold mb-0">There is no property
                                    available.
                                </p>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div class="px-3 pt-4">
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
