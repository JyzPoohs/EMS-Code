@extends('layouts.app')

@section('content')

<div class="container" style="font-family: 'Times New Roman', Times, serif">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <img src="{{ env('APP_URL') . '/img/indek.png' }}" width="100%" style="align-content: center;" alt="Indek">
        </div>
        <div class="col-md-4">
            <div class="card">
                <h3 class="text-center card-title"><strong>{{ __('Login') }}</strong></h3>
                
                <div class="card-body"> 
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    
                        <div class="row mb-3">
                            <label style="padding-top: 0px" for="role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>
                            <div class="form-group col-md-6">
                                <div class="form-check form-check-inline col-md-5">
                                    <input class="form-check-input" type="radio" name="role"
                                        id="userRadio">
                                    <label class="custom-control-label" for="userRadio">User</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="staffRadio"
                                        id="staffRadio">
                                    <label class="custom-control-label" for="staffRadio">Staff</label>
                                </div>
                            </div> 
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('IC Number') }}</label>

                            <div class="col-md-6">
                                <input id="ic" type="ic" class="form-control @error('ic') is-invalid @enderror" name="ic" value="{{ old('ic') }}" required autocomplete="ic" autofocus>

                                @error('ic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="loginBtn">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="col-md-10 offset-md-2  password">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Change Password ') }}
                                    </a>
                                @endif
                                |
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link " href="{{ route('password.request') }}">
                                        {{ __('Forgot Password') }}
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
                <a class="btn btn-link registerBtn" href="{{ route('userRegister') }}">{{ __('User') }}</a>
                <a class="btn btn-link registerBtn" href="{{ route('staffRegister') }}">{{ __('Staff') }}</a>
                @endif
                @endguest
                    
                </div>
            </div>
         </div>
    </div>
</div>
@endsection
