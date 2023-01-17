@extends('layouts.app')
@extends('layouts.master')

@section('content')


<div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="text-center">
                            <a href="index.html">
                                <span><img src="assets/images/logo-light.png" alt="syed" height="22"></span>
                            </a>
                            <p class="text-muted mt-2 mb-4">Responsive Admin Dashboard</p>
                        </div>
                        <div class="card">

                            <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3 for">
                            <label for="name" class="col-md-4 col-form-label ml-3 pl-0">{{ __('Name') }}</label>

                            <div class="form-group mb-3">
                                <input  class="form-control" id="name" placeholder="Enter your name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 col-form-label">{{ __('Email Address') }}</label>

                            <div class="form-group">
                                <input id="email" type="email" placeholder="Enter your Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>

                            <div class="form-group">
                                <input id="password" type="password" placeholder="Enter your password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class=" form-group">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end pl-0">{{ __('Confirm Password') }}</label>

                            <div class="form-group">
                                <input id="password-confirm" placeholder="Enter your confirm password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-12 text-center">
                                <p class="text-muted">Already have account?  <a href=" {{ __('login') }}" class="text-white ml-1"><b>Sign In</b></a></p>
                            </div> 
                        </div>
                        

                    </div> 
                </div>
                
            </div>

@endsection
