<div class="container" style="font-family: 'Times New Roman', Times, serif">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <img src="{{ env('APP_URL') . '/img/indek.png' }}" width="100%" style="align-content: center;" alt="Indek">
        </div>
        <div class="col-md-4">
            <div class="card">
                <h3 class="text-center card-title"><strong>{{ $title }}</strong></h3>
                @if(request()->route()->getName() === 'login')
                    @include('login')
                @elseif (request()->route()->getName() === 'register')
                    @include('userRegister')
                @endif
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
