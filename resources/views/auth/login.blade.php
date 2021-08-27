@extends('layouts.master')

@section('content')

<div class="panel-body">
    <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group ">
            <div class="col-xs-12">

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12">

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group ">
            <div class="col-xs-12">
                <div class="checkbox checkbox-primary">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label for="checkbox-signup">
                        Remember me
                    </label>
                </div>

            </div>
        </div>

        <div class="form-group text-center m-t-40">
            <div class="col-xs-12">
                <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">Log In</button>
            </div>
        </div>

        <div class="form-group m-t-30">
            <div class="col-sm-7">
               
                @if (Route::has('password.request'))
                
                 <a href="{{ route('password.request') }}" ><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                @endif
            </div>
            <div class="col-sm-5 text-right">
                <a href="{{ route('register')}}">Create an account</a>
            </div>
        </div>
    </form>
</div>


@endsection
