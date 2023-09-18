@extends('partials.navbar')

@section('content')

<div class="container-login100">
    <div class="wrap-login100">
        <form  method="POST" action="{{ route('register') }}" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
            <span class="login100-form-title">
                Register
            </span>
            @csrf
            <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Name">
                <input id="name" type="text" class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                    @error('name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
            <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Email"> 
                <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter password">
                <input id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="wrap-input100 validate-input m-b-16" data-validate = "Please confirm password">
                    <input id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
            </div>

            <div class="container-login100-form-btn">
                <button class="login100-form-btn">
                    Register
                </button>
            </div>

            <div class="flex-col-c p-t-170 p-b-40">
                <span class="txt1 p-b-9">
                    Already Have Account?
                </span>

                <a href="{{ route('login') }}" class="txt3">
                    Sign in now
                </a>
            </div>
        </form>
    </div>
</div>
</div>
@endsection
