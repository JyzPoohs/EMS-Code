@extends('layouts.app')
@section('content')
    <div class="container" style="font-family: 'Times New Roman', Times, serif">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <img src="{{ env('APP_URL') . '/img/indek.png' }}" width="100%" style="align-content: center;" alt="Indek">
            </div>
            <div class="col-md-4">
                @if (session('fail'))
                    <div class="alert alert-danger mt-3">{{ session('fail') }}</div>
                @endif
                <div class="card" style="background-color: #c6f3f267">

                    <h3 class="text-center card-title"><strong>{{ __('Access Code') }}</strong></h3>

                    <div class="card-body">
                        <form method="get" action="{{ route('staff.validateCode') }}">
                            <div class="row mb-3">
                                <label for="code"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Access Code') }}</label>

                                <div class="col-md-6">
                                    <input id="code" type="code"
                                        class="form-control @error('fail') is-invalid @enderror" name="code"
                                        value="{{ old('code') }}" required autocomplete="code" autofocus>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <input type="submit" class="btn btn-primary col-sm-3" value="Continue">
                            </div>
                            <div class="text-center">
                                <a href="{{ route('login') }}" style="text-decoration: none">[Back]</a>
                            </div>
                        </form>
                    </div>
                </div>
                <p style="color:darkred; text-align:center">*Note: Only JAIP admin/staff is able to access the staff
                    registration</p>
            </div>
        </div>
    </div>
@endsection
