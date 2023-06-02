@extends('layouts.app')

@section('content')
    <div class="container" style="font-family: 'Times New Roman', Times, serif">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <img src="{{ env('APP_URL') . '/img/indek.png' }}" width="100%" style="align-content: center;" alt="Indek">
            </div>
            <div class="col-md-6">
                <div class="card" style="background-color: #f7ecda">
                    <h3 class="text-center card-title"><strong>{{ __('Staff Registration') }}</strong></h3>

                    <div class="card-body">
                        <form method="POST" action="{{ route('staff.create') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="ic"
                                    class="col-md-4 col-form-label text-md-end">{{ __('IC Number') }}</label>

                                <div class="col-md-6">
                                    <input id="ic" type="text" placeholder="Enter IC Number"
                                        class="form-control @error('ic') is-invalid @enderror textPlaceholder"
                                        name="ic" value="{{ old('ic') }}" required autocomplete="ic" autofocus>

                                    @error('ic')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" placeholder="Enter Name"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="department"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>
                                <div class="col-md-6 form-group">
                                    <select class="form-select" name="department">
                                        <option disabled selected>Select department</option>
                                        <option name="a" value="1">One</option>
                                        <option name="b" value="2">Two</option>
                                        <option name="c" value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="accessCategory"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Access Category') }}</label>
                                <div class="col-md-6 form-group">
                                    <select class="form-select" name="accessCategory">
                                        <option disabled selected>Select access categoty</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="position"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Position') }}</label>
                                <div class="col-md-6 form-group">
                                    <select class="form-select" name="position">
                                        <option disabled selected>Select position</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="paid"
                                    class="col-md-4 col-form-label text-md-end">{{ __('PAID') }}</label>
                                <div class="col-md-6 form-group">
                                    <select class="form-select" name="paid">
                                        <option disabled selected>Select PAID</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" placeholder="Enter Email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="Must more than 6 characters"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Repeat Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" placeholder="Repeat Password"
                                        class="form-control" name="password_confirmation" required
                                        autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" class="btn btn-primary" id="registerBtn"
                                        style="background-color: #9b1233; border:none;">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="col-md-6 offset-md-6">
                            <a href="{{ route('staff.accessCode') }}" style="text-decoration: none">[Back]</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
