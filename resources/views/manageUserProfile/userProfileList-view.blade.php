@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid">
        @if (Session::has('delete'))
            <div class="alert alert-danger mt-3">{{ Session::get('delete') }}</div>
        @endif

        <div class="mt-4">
            <h2 class="tableHeader text-center mb-3 rounded">User Profile List</h2>
            <table class="table table-bordered" id="list">
                <thead style="background-color: #D2DAFF">
                    <tr>
                        <th class="text-center">IC Number/Username</th>
                        <th class="text-center">Gender</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Date Register</th>
                        <th class="text-center col-md-2">Operation</th>
                    </tr>
                </thead>
                <tbody style="background-color: #eef1ffa7">
                    @if (!$users->isEmpty())
                        @php $counter = 0; @endphp
                        @foreach ($users as $user)
                            @php $counter++; @endphp
                            <tr>
                                <td>
                                    {{ $user['ic'] }} <br> {{ strtoupper($user['name']) }}
                                </td>
                                <td class="text-center">

                                    {{ strtoupper($user['gender']) }}
                                </td>
                                <td class="text-center">
                                    {{ $user['email'] }}
                                </td>
                                <td class="text-center">
                                    {{ $user['created_at']->format('Y/m/d') }}
                                </td>
                                <td>
                                    <a href="{{ route('staff.viewUserProfile', ['id' => $user->id]) }}"
                                        class="btn btn-primary">
                                        <i class="fas fa-eye"></i></a>
                                    @if (Auth::guard('staff')->user()->accessCategory === 'ADMINISTRATOR')
                                        <a href="{{ route('staff.userProfileUpdateView', ['id' => $user->id]) }}"
                                            class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{ route('staff.destroyUserProfile', ['id' => $user->id]) }}"
                                            class="btn btn-danger" onclick="return confirm('Confirm to delete?')"><i
                                                class="fas fa-trash-alt"></i></a>
                                    @endif
                                </td>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>


@endsection
