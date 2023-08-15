@extends('layouts.app')

@section('content')
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="card" data-aos="zoom-in" data-aos-delay="100">
            <div class="card-body">
              <h2 class="card-title">Login</h2>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                  </div>
                </div>
                <button type="submit" class="btn btn-get-started scrollto">Login</button>
                @if (Route::has('password.request'))
                  <a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
                @endif
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
