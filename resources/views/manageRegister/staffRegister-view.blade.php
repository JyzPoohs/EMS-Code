@extends('layouts.app')

@section('content')
    <div class="container" style="font-family: 'Times New Roman', Times, serif">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <img src="{{ env('APP_URL') . '/img/indek.png' }}" width="100%" style="align-content: center;" alt="Indek">
            </div>
            <div class="col-md-6">
                @if (session('fail'))
                    <div class="alert alert-danger">
                        {{ session('fail') }}
                    </div>
                @endif
                <div class="card" style="background-color: honeydew">
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
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="department"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>
                                    <div class="col-md-6 form-group">
                                        <select class="form-select @error('department') is-invalid @enderror"
                                            name="department">
                                            <option disabled selected>Select department</option>
                                            <option value="MARRIAGE REQUEST"
                                                {{ old('department') == 'MARRIAGE REQUEST' ? 'selected' : '' }}>MARRIAGE
                                                REQUEST
                                            </option>
                                            <option value="MARRIAGE REGISTER"
                                                {{ old('department') == 'MARRIAGE REGISTER' ? 'selected' : '' }}>MARRIAGE
                                                REGISTER</option>
                                            <option value="MARRIAGE COURSE"
                                                {{ old('department') == 'MARRIAGE COURSE' ? 'selected' : '' }}>MARRIAGE
                                                COURSE
                                            </option>
                                            <option value="CARD NIKAH"
                                                {{ old('department') == 'CARD NIKAH' ? 'selected' : '' }}>CARD NIKAH
                                            </option>
                                            <option value="INCENTIVE"
                                                {{ old('department') == 'INCENTIVE' ? 'selected' : '' }}>
                                                INCENTIVE</option>
                                            <option value="CONSULTATION"
                                                {{ old('department') == 'CONSULTATION' ? 'selected' : '' }}>CONSULTATION
                                            </option>
                                            <option value="SYSTEM MANAGEMENT"
                                                {{ old('department') == 'SYSTEM MANAGEMENT' ? 'selected' : '' }}>SYSTEM
                                                MANAGEMENT</option>
                                        </select>
                                        @error('department')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="accessCategory"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Access Category') }}</label>
                                    <div class="col-md-6 form-group">
                                        <select class="form-select @error('accessCategory') is-invalid @enderror"
                                            name="accessCategory">
                                            <option disabled selected>Select access categoty</option>
                                            <option value="ADMINISTRATOR"
                                                {{ old('accessCategory') === 'ADMINISTRATOR' ? 'selected' : '' }}>
                                                ADMINISTRATOR
                                            </option>
                                            <option value="STAFF"
                                                {{ old('accessCategory') === 'STAFF' ? 'selected' : '' }}>
                                                STAFF</option>
                                        </select>
                                        @error('accessCategory')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="position"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Position') }}</label>
                                    <div class="col-md-6 form-group">
                                        <select class="form-select @error('position') is-invalid @enderror" name="position">
                                            <option disabled selected>Select position</option>
                                            <option value="MARRIAGE REQUEST OFFICER"
                                                {{ old('position') == 'MARRIAGE REQUEST OFFICER' ? 'selected' : '' }}>
                                                MARRIAGE
                                                REQUEST OFFICER</option>
                                            <option value="MARRIAGE COURSE OFFICER"
                                                {{ old('position') == 'MARRIAGE COURSE OFFICER' ? 'selected' : '' }}>
                                                MARRIAGE
                                                COURSE OFFICER</option>
                                            <option value="MARRIAGE REGISTER OFFICER"
                                                {{ old('position') == 'MARRIAGE REGISTER OFFICER' ? 'selected' : '' }}>
                                                MARRIAGE
                                                REGISTER OFFICER</option>
                                            <option value="MARRIAGE COORDINATOR"
                                                {{ old('position') == 'MARRIAGE COORDINATOR' ? 'selected' : '' }}>MARRIAGE
                                                COORDINATOR</option>
                                            <option value="MARRIAGE COUNSELOR"
                                                {{ old('position') == 'MARRIAGE COUNSELOR' ? 'selected' : '' }}>MARRIAGE
                                                COUNSELOR</option>
                                            <option value="MARRIAGE ADMINISTRATOR"
                                                {{ old('position') == 'MARRIAGE ADMINISTRATOR' ? 'selected' : '' }}>
                                                MARRIAGE
                                                ADMINISTRATOR</option>
                                        </select>
                                        @error('position')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="paid"
                                        class="col-md-4 col-form-label text-md-end">{{ __('PAID') }}</label>
                                    <div class="col-md-6 form-group">
                                        <select class="form-control @error('paid') is-invalid @enderror" name="paid">
                                            <option disabled selected>Select PAID</option>
                                            <option value="PAID PEKAN" {{ old('paid') == 'PAID PEKAN' ? 'selected' : '' }}>
                                                PAID
                                                PEKAN</option>
                                            <option value="PAID KUANTAN"
                                                {{ old('paid') == 'PAID KUANTAN' ? 'selected' : '' }}>
                                                PAID KUANTAN</option>
                                            <option value="PAID ROMPIN"
                                                {{ old('paid') == 'PAID ROMPIN' ? 'selected' : '' }}>
                                                PAID ROMPIN</option>
                                            <option value="PAID MUADZAM SHAH"
                                                {{ old('paid') == 'PAID MUADZAM SHAH' ? 'selected' : '' }}>PAID MUADZAM
                                                SHAH
                                            </option>
                                            <option value="PAID MARAN" {{ old('paid') == 'PAID MARAN' ? 'selected' : '' }}>
                                                PAID
                                                MARAN</option>
                                            <option value="PAID JENGKA"
                                                {{ old('paid') == 'PAID JENGKA' ? 'selected' : '' }}>
                                                PAID JENGKA</option>
                                            <option value="PAID KUANTAN BARAT"
                                                {{ old('paid') == 'PAID KUANTAN BARAT' ? 'selected' : '' }}>PAID KUANTAN
                                                BARAT
                                            </option>
                                            <option value="PAID TEMERLOH"
                                                {{ old('paid') == 'PAID TEMERLOH' ? 'selected' : '' }}>PAID TEMERLOH
                                            </option>
                                            <option value="PAID BENTONG"
                                                {{ old('paid') == 'PAID BENTONG' ? 'selected' : '' }}>
                                                PAID BENTONG</option>
                                            <option value="PAID JERANTUT"
                                                {{ old('paid') == 'PAID JERANTUT' ? 'selected' : '' }}>PAID JERANTUT
                                            </option>
                                            <option value="PAID RAUB" {{ old('paid') == 'PAID RAUB' ? 'selected' : '' }}>
                                                PAID
                                                RAUB</option>
                                            <option value="PAID KUALA LIPIS"
                                                {{ old('paid') == 'PAID KUALA LIPIS' ? 'selected' : '' }}>PAID KUALA LIPIS
                                            </option>
                                            <option value="PAID BERA" {{ old('paid') == 'PAID BERA' ? 'selected' : '' }}>
                                                PAID
                                                BERA</option>
                                            <option value="PAID CAMERON HIGHLAND"
                                                {{ old('paid') == 'PAID CAMERON HIGHLAND' ? 'selected' : '' }}>PAID CAMERON
                                                HIGHLAND</option>
                                        </select>
                                        @error('paid')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
                                    <label for="cpassword"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Repeat Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="cpassword" type="password" placeholder="Repeat Password"
                                            class="form-control @error('cpassword') is-invalid @enderror" name="cpassword"
                                            required autocomplete="cpassword">
                                        @error('cpassword')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
