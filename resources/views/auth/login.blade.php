@extends('layouts.app')
@extends('layouts.master')

@section('content')


    <!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
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
    <button type="submit" class="btn btn-primary">
{{ __('Login') }}
        </button>

@if (Route::has('password.request'))
        <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
            </a>
@endif
        </div>
    </div>
</form>
</div>
</div>
</div>
</div>
</div> -->

    <div class="home-btn d-none d-sm-block">
        <a href="#"><i class="fas fa-home h2 text-dark"></i></a>
    </div>

    <div class="account-pages mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="text-center pb-2">
                        <a href="#">
                            <span><img src="{{asset('assets/images/logo.png')}}" alt="" width="100"></span>
                        </a>
                    </div>
                    <div class="card ">

                        <div class="card-body p-4">

                            <div class="text-center mb-4">
                                <h4 class="text-uppercase mt-0">Sign In</h4>
                            </div>

                            <form method="POST" action="{{ route('login') }}">

                                @csrf

                                <div class="row">

                                    <div class="form-group w-100">
                                        <label for="email">{{ __('Email Address') }}</label>
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="form-group mb-3 w-100">
                                        <label for="password">{{ __('Password') }}</label>

                                        <div class="form-group mb-3">
                                            <input class="form-control" id="password" type="password"
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="custom-checkbox custom-control">
                                        <div class="custom-checkbox custom-control">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class=" btn-block">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            {{ __('Login') }}
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>


                    <!-- <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p><a href="pages-recoverpw.html" class="text-muted ml-1"><i class="fa fa-lock mr-1"></i>Forgot
                                    your password?</a></p>
                            <p class="text-muted">Don't have an account? <a href="#" class="text-white ml-1"><b>Sign
                                        Up</b></a></p>
                        </div>
                    </div> -->


                </div>
            </div>

        </div>

    </div>


@endsection
