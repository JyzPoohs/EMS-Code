@extends('layouts.app')

@section('content')
    <div class="container" style="font-family: 'Times New Roman', Times, serif">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <img src="{{ env('APP_URL') . '/img/indek.png' }}" width="100%" style="align-content: center;" alt="Indek">
            </div>
            <div class="col-md-4">
                <div class="card" style="background-color: #D8EEF5">
                    <h3 class="text-center card-title"><strong>{{ __('Registration Success') }}</strong></h3>
                    <div class="card-body">
                        <div class="row">
                            <p class="text-center">
                                {{ 'You have successfully registered.' }}
                                {{ 'Please click <<LOGIN>> to back to login page.' }}
                            </p>
                        </div>
                        <div class="row justify-content-center">
                            <a href="{{ route('login') }}" class="btn col-sm-3"
                                style="background: #052D70; color:white">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
