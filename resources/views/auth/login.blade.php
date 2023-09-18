@extends('partials.navbar')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form  method="POST" action="{{ route('login') }}" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                <span class="login100-form-title">
                    Sign In
                </span>
                @csrf

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Email">
                    <input id="email" class=" @error('email') is-invalid @enderror input100" value="{{ old('email') }}" required autocomplete="email" autofocus type="text" name="email" placeholder="Email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                    <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                    <div class="text-left p-t-13 p-b-23">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>

                <div class="text-right p-t-13 p-b-23">

                    @if (Route::has('password.request'))
                       <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Sign in
                    </button>
                </div>

                <div class="flex-col-c p-t-170 p-b-40">
                    <span class="txt1 p-b-9">
                        Don’t have an account?
                    </span>

                    <a href="{{ route('register') }}" class="txt3">
                        Sign up now
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
