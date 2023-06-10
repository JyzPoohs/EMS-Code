@extends('layouts.staffProfile')

@section('content')
    <div class="container-fluid">
        @if (Session::has('delete'))
            <div class="alert alert-danger mt-3">{{ Session::get('delete') }}</div>
        @endif

        <div class="mt-4">
            <h2 class="staffTableHeader text-center mb-3 rounded" style="background-color: #9ED5C5">Staff Profile List</h2>
            <table class="table table-bordered" id="list">
                <thead style="background-color: #9ED5C5; color: #29231c">
                    <tr>
                        <th class="text-center">IC Number/Staff Name</th>
                        <th class="text-center">PAID</th>
                        <th class="col-md-2 text-center">Email</th>
                        <th class="text-center" style="width: 95px">Date Register</th>
                        <th class="col-md-1 text-center">Status</th>
                        <th class="text-center col-md-2">Operation</th>
                    </tr>
                </thead>
                <tbody style="background-color: #DEF5E5">
                    @if (!$users->isEmpty())
                        @php $counter = 0; @endphp
                        @foreach ($users as $user)
                            @php $counter++; @endphp
                            <tr>
                                <td>
                                    {{ $user['ic'] }} <br> {{ strtoupper($user['name']) }}
                                </td>
                                <td class="text-center">
                                    {{ strtoupper($user['paid']) }}
                                </td>
                                <td class="text-center">
                                    {{ $user['email'] }}
                                </td>
                                <td class="text-center">
                                    {{ $user['created_at']->format('Y/m/d') }}
                                </td>
                                <td class="text-center">
                                    {{ strtoupper($user['status']) }}
                                </td>
                                <td>
                                    <a href="{{ route('staff.viewStaffProfile', ['id' => $user->id]) }}"
                                        class="btn btn-primary" title="View">
                                        <i class="fas fa-eye"></i></a>
                                    @if (Auth::guard('staff')->user()->accessCategory === 'ADMINISTRATOR')
                                        <a href="{{ route('staff.staffProfileUpdateView', ['id' => $user->id]) }}"
                                            class="btn btn-warning" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{ route('staff.destroyStaffProfile', ['id' => $user->id]) }}"
                                            class="btn btn-danger" onclick="return confirm('Confirm to delete?')"><i
                                                class="fas fa-trash-alt" title="Delete"></i></a>
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
