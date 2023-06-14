@extends('layouts.app')
@section('content')
    <div class="container" style="font-family: 'Times New Roman', Times, serif">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <img src="{{ env('APP_URL') . '/img/indek.png' }}" width="100%" style="align-content: center;" alt="Indek">
            </div>
            <div class="col-md-5">
                <div class="card" style="background-color: #F8F6F4">
                    @if (session('reset'))
                        <div class="alert alert-success">
                            {{ session('reset') }}
                        </div>
                    @endif
                    <h3 class="text-center card-title"><strong>{{ __('Change Password') }}</strong></h3>

                    <div class="card-body">

                        <form method="POST" action="{{ route('change-password.post') }}">
                            @csrf

                            <div class="row mb-3">
                                <label style="padding-top: 0px" for="role"
                                    class="col-md-5 col-form-label text-md-end">{{ __('Role') }}</label>
                                <div class="form-group col-md-6">
                                    <div class="form-check form-check-inline col-md-5">
                                        <input class="form-check-input" type="radio" name="role" id="userRadio"
                                            value="user" checked>
                                        <label class="custom-control-label" for="userRadio">User</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="role" id="staffRadio"
                                            value="staff">
                                        <label class="custom-control-label" for="staffRadio">Staff</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-5 col-form-label text-md-end">{{ __('IC Number') }}</label>

                                <div class="col-md-6">
                                    <input id="ic" type="ic" placeholder="Enter IC Number"
                                        class="form-control @error('ic') is-invalid @enderror" name="ic"
                                        value="{{ old('ic') }}" required autocomplete="ic" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-5 col-form-label text-md-end">{{ __('Current Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="Enter Current Password"
                                        value="{{ old('password') }}"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-5 col-form-label text-md-end">{{ __('New Password') }}</label>

                                <div class="col-md-6">
                                    <input id="newPassword" type="password" placeholder="Enter New Password"
                                        value="{{ old('newPassword') }}"
                                        class="form-control @error('newPassword') is-invalid @enderror" name="newPassword"
                                        required autocomplete="newPassword">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-5 col-form-label text-md-end">{{ __('Repeat New Password') }}</label>

                                <div class="col-md-6">
                                    <input id="repeatPassword" type="password" placeholder="Repeat New Password"
                                        value="{{ old('repeatPassword') }}"
                                        class="form-control @error('repeatPassword') is-invalid @enderror"
                                        name="repeatPassword" required autocomplete="repeatPassword">
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary" id="loginBtn"
                                        style="background-color: #11009E; border:none; color: white; width=200px">
                                        {{ __('Change Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="text-center">
                            <a href="{{ route('login') }}" style="text-decoration: none">[Back]</a>
                        </div>
                    </div>
                </div>
                <p style="color:darkred; text-align:center">*Note: The password must be 6 - 12 characters/digits</p>
                <div class="text-center">
                    <label for="" class="m-3">No account? Register as</label>
                    <div class="">
                        @guest
                            @if (Route::has('register'))
                                <a class="btn btn-link registerBtn"
                                    href="{{ route('user.register') }}">{{ __('User') }}</a>
                                <a class="btn btn-link registerBtn"
                                    href="{{ route('staff.register') }}">{{ __('Staff') }}</a>
                            @endif
                        @endguest

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
