@extends('layouts.app')
@section('content')
    <div class="container" style="font-family: 'Times New Roman', Times, serif">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <img src="{{ env('APP_URL') . '/img/indek.png' }}" width="100%" style="align-content: center;" alt="Indek">
            </div>
            <div class="col-md-4">
                <div class="card" style="background-color: honeydew">

                    <h3 class="text-center card-title"><strong>{{ __('Forgot Password') }}</strong></h3>

                    <div class="card-body">

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('IC Number') }}</label>

                                <div class="col-md-6">
                                    <input id="ic" type="ic" placeholder="Enter IC Number"
                                        class="form-control @error('ic') is-invalid @enderror" name="ic"
                                        value="{{ old('ic') }}" required autocomplete="ic" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" placeholder="Enter email"
                                        value="{{ old('email') }}"
                                        class="form-control @error('email') is-invalid @enderror" name="email" required
                                        autocomplete="current-email">
                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary" id="loginBtn"
                                        style="background-color: #6495ED; border:none; color: white; width=200px">
                                        {{ __('Change Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="col-md-6 offset-md-6">
                            <a href="{{ route('login') }}" style="text-decoration: none">[Back]</a>
                        </div>
                    </div>
                </div>
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

{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
