<!DOCTYPE html>
@extends('layouts.login')

@section('assets')
@endsection

@section('title', 'Edit Account')
@section('content')

<div class="centerBox">
    <div class="leftBox">
        <div class="image"> <img src="../images/patrolplan.png" width="500" height="600"></div>
    </div>
    <div class="rightBox">
        <div class="welcomeMessage">
            <h1>
                Password<br />
                Reset
            </h1>
        </div>

        <div class="welcomeForm">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <div class="passwordBox">

                    <div class="group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>{{ __('E-Mail Address') }}</label>
                    </div>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="loginButtonBox">
                    <div class="button">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </div>

            </form>
        </div>

    </div>
</div>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <button type="submit" class="btn btn-primary">
            {{ __('Send Password Reset Link') }}
        </button>
    </form>

</body>

</html> -->
