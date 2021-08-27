@extends('layouts.master')

@section('content')

<div class="panel-body">
    <form class="form-horizontal m-t-20" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <div class="col-xs-12">

                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group ">
            <div class="col-xs-12">

                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Username" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12">

                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-12">

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirm">
            </div>
        </div>

        <div class="form-group ">
            <div class="col-xs-12">
                <div class="checkbox checkbox-primary">
                    <input id="checkbox-signup" type="checkbox" checked="">
                    <label for="checkbox-signup">
                        I accept <a href="#">Terms and Conditions</a>
                    </label>
                </div>

            </div>
        </div>

        <div class="form-group text-center m-t-40">
            <div class="col-xs-12">
                <button class="btn btn-primary waves-effect waves-light btn-lg w-lg"  type="submit">Register</button>
            </div>
        </div>

        <div class="form-group m-t-30">
            <div class="col-sm-12 text-center">
                <a href="{{ route('login')}}">Already have account?</a>
            </div>
        </div>
    </form>
</div>
</div>







@endsection
