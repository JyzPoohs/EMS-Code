@extends('layouts.app')

@section('content')
    <div class="container" style="font-family: 'Times New Roman', Times, serif">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <img src="{{ env('APP_URL') . '/img/indek.png' }}" width="100%" style="align-content: center;" alt="Indek">
            </div>
            <div class="col-md-6">
                <div class="card" style="background-color: #ECF8F9">
                    <h3 class="text-center card-title"><strong>{{ __('Staff Registration') }}</strong></h3>

                    <div class="card-body">
                        <form method="POST" action="{{ route('staff.create') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="ic"
                                    class="col-md-4 col-form-label text-md-end">{{ __('IC Number') }}</label>

                                <div class="col-md-6">
                                    <input id="ic" type="text" placeholder="e.g 650515071028"
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
                                        <option value="MARRIAGE REQUEST">MARRIAGE REQUEST</option>
                                        <option value="MARRIAGE REGISTER">MARRIAGE REGISTER</option>
                                        <option value="MARRIAGE COURSE">MARRIAGE COURSE</option>
                                        <option value="CARD NIKAH">CARD NIKAH</option>
                                        <option value="INCENTIVE">INCENTIVE</option>
                                        <option value="CONSULTATION">CONSULTATION</option>
                                        <option value="SYSTEM MANAGEMENT">SYSTEM MANAGEMENT</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="accessCategory"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Access Category') }}</label>
                                <div class="col-md-6 form-group">
                                    <select class="form-select" name="accessCategory">
                                        <option disabled selected>Select access categoty</option>
                                        <option value="ADMINISTRATOR">ADMINISTRATOR</option>
                                        <option value="STAFF">STAFF</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="position"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Position') }}</label>
                                <div class="col-md-6 form-group">
                                    <select class="form-select" name="position">
                                        <option disabled selected>Select position</option>
                                        <option value="MARRIAGE REQUEST OFFICER">MARRIAGE REQUEST OFFICER</option>
                                        <option value="MARRIAGE COURSE OFFICER">MARRIAGE COURSE OFFICER</option>
                                        <option value="MARRIAGE REGISTER OFFICER">MARRIAGE REGISTER OFFICER</option>
                                        <option value="MARRIAGE COORDINATOR">MARRIAGE COORDINATOR</option>
                                        <option value="MARRIAGE COUNSELOR">'MARRIAGE COUNSELOR</option>
                                        <option value="MARRIAGE ADMINISTRATOR">MARRIAGE ADMINISTRATOR</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="paid"
                                    class="col-md-4 col-form-label text-md-end">{{ __('PAID') }}</label>
                                <div class="col-md-6 form-group">
                                    <select class="form-select" name="paid">
                                        <option disabled selected>Select PAID</option>
                                        <option value="PAID PEKAN">PAID PEKAN</option>
                                        <option value="PAID KUANTAN">PAID KUANTAN</option>
                                        <option value="PAID ROMPIN">PAID ROMPIN</option>
                                        <option value="PAID MUADZAM SHAH">PAID MUADZAM SHAH</option>
                                        <option value="PAID MARAN">PAID MARAN</option>
                                        <option value="PAID JENGKA">PAID JENGKA</option>
                                        <option value="PAID KUANTAN BARAT">PAID KUANTAN BARAT</option>
                                        <option value="PAID TEMERLOH">PAID TEMERLOH</option>
                                        <option value="PAID BENTONG">PAID BENTONG</option>
                                        <option value="PAID JERANTUT">PAID JERANTUT</option>
                                        <option value="PAID RAUB">PAID RAUB</option>
                                        <option value="PAID KUALA LIPIS">PAID KUALA LIPIS</option>
                                        <option value="PAID BERA">PAID BERA</option>
                                        <option value="PAID CAMERON HIGHLAND">PAID CAMERON HIGHLAND</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" placeholder="e.g test@example.com"
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
                                    <input id="password" type="password" placeholder="6 - 12 characters/digits"
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
                                        style="background-color: #2B3467; border:none;">
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
