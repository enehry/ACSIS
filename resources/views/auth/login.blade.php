<!DOCTYPE html>
@extends('layouts.login')

@section('assets')
@endsection

@section('title', 'Login')
@section('content')

<div class="centerBox">
    <div class="leftBox">
        <div class="image"> <img src="../images/patrolplan.png" width="500" height="600"></div>
    </div>
    <div class="rightBox">
        <div class="welcomeMessage">
            <h1>
                Hello.<br />
                Welcome Back
            </h1>
        </div>

        <div class="welcomeForm">
            <form class="welcomeForm" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="emailBox">

                    <div class="group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Email:</label>
                    </div>

                </div>

                <div class="passwordBox">

                    <div class="group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Password:</label>
                    </div>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="loginButtonBox">
                    <div class="button">
                        <button type="submit" class="button pointer ripple"><span>{{ __('Login') }}</span></button>
                    </div>
                    <div class="forgotPass">
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
