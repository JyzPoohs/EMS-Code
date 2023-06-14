@extends('layouts.app')

@section('content')
    <div class="container" style="font-family: 'Times New Roman', Times, serif">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <img src="{{ env('APP_URL') . '/img/indek.png' }}" width="100%" style="align-content: center;" alt="Indek">
            </div>
            <div class="col-md-4">
                @error('fail')
                    <div class="text-center text-white font-bold rounded-t px-4 pt-2 pb-2 mb-3"
                        style="background-color: rgb(191, 36, 36); border-radius:10px;">
                        {{ strtoupper('Login Failed') }} <br>
                        {{ $message }}
                    </div>
                @enderror

                @if (Session::has('reset'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('reset') }}
                    </div>
                @endif

                <div class="card" style="background-color: #E9FADD">

                    <h3 class="text-center card-title"><strong>{{ __('Login') }}</strong></h3>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login-user') }}">
                            @csrf

                            <div class="row mb-3">
                                <label style="padding-top: 0px" for="role"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>
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
                                <label for="ic"
                                    class="col-md-4 col-form-label text-md-end">{{ __('IC Number') }}</label>

                                <div class="col-md-7">
                                    <input id="ic" type="ic"
                                        class="form-control @error('ic') is-invalid @enderror" name="ic"
                                        placeholder="e.g 891213101207" value="{{ old('ic') }}" required
                                        autocomplete="ic" autofocus>
                                    @error('ic')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                <div class="col-md-7">
                                    <input id="password" type="password" placeholder="6 - 12 characters/digits"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row justify-content-center mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn" id="loginBtn"
                                        style=" border:none; color: white;">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div class="col-md-10 offset-md-2 password mt-4">
                                    @if (Route::has('change-password.get'))
                                        <a class="btn btn-link"
                                            href="{{ route('change-password.get') }}">
                                            {{ __('Change Password') }}
                                        </a>
                                    @endif
                                        |
                                    @if (Route::has('forgot-password.get'))
                                        <a class="btn" href="{{ route('forgot-password.get') }}">
                                            {{ __('Forgot Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-center">
                    <label for="" class="m-3">No account? Register as</label>
                    <div class="">
                        @guest
                            @if (Route::has('register'))
                                <a class="btn registerBtn" href="{{ route('user.register') }}">{{ __('User') }}</a>
                                <a class="btn registerBtn" href="{{ route('staff.accessCode') }}">{{ __('Staff') }}</a>
                            @endif
                        @endguest

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
