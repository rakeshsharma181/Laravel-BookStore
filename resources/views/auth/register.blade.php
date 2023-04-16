@extends('layouts.auth')

@section('content')


<!-- Nested Row within Card Body -->
<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">{{__('Book Store!')}}</h1>
            </div>
            <form class="form-horizontal form-material user" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control form-control-user @error('firstname') is-invalid @enderror"
                        name="firstname" value="{{ old('firstname') }}" 
                        placeholder="Enter First Name...">
                    @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user @error('lastname') is-invalid @enderror"
                        name="lastname" value="{{ old('lastname') }}" 
                        placeholder="Enter Last Name...">
                    @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" aria-describedby="emailHelp"
                        placeholder="Enter Email Address...">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password"
                        class="form-control form-control-user @error('password') is-invalid @enderror" name="password"
                        placeholder="Enter Password...">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password"
                        class="form-control form-control-user @error('password') is-invalid @enderror" name="password_confirmation" id="password-confirm"
                        placeholder="Confirm Password ...">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-user btn-block  form-control form-control-user text-black">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
            <hr>
            
            <div class="text-center">
                @if (Route::has('password.request'))
                <a class="small" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                @endif
            </div>
            <div class="text-center">
            @if (Route::has('login'))
                <a class="small" style="color:red" href="{{ route('login') }}">{{ __('Login?') }}</a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection