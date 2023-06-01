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
                        <th style="width: 80px">IC Number</th>
                        <th class="col-md-2">Staff Name</th>
                        <th>PAID</th>
                        <th class="col-md-2">Email</th>
                        <th class="col-md-2">Date Register</th>
                        <th style="width: 120px">Operation</th>
                    </tr>
                </thead>
                <tbody style="background-color: #DEF5E5">
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
                                    {{ strtoupper($user['paid']) }}
                                </td>
                                <td>
                                    {{ $user['email'] }}
                                </td>
                                <td>
                                    {{ $user['created_at']->format('Y/m/d') }}
                                </td>
                                <td>
                                    <a href="{{ route('staff.viewStaffProfile', ['id' => $user->id]) }}"
                                        class="btn btn-primary">
                                        <i class="fas fa-eye"></i></a>
                                    <a href="{{ route('staff.staffProfileUpdateView', ['id' => $user->id]) }}"
                                        class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{ route('staff.destroyStaffProfile', ['id' => $user->id]) }}"
                                        class="btn btn-danger" onclick="return confirm('Confirm to delete?')"><i
                                            class="fas fa-trash-alt"></i></a>
                                </td>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            <div class="px-3 pt-4">
                {{ $users->links() }}
            </div>
        </div>
    </div>
    
    
@endsection
