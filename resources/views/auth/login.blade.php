{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

<div class="card-body">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
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
</div>
@endsection --}}


@extends('layouts.front.front')

@section('content')
<main id="main" data-aos="fade-up" class="aos-init aos-animate">

    <section class="inner-page">
        <div class="container">
            <center>
            <div class="col-md-4">
                <div class="login-form">
                     <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h2 class="text-center">Log in</h2>
                        <h5>Login Untuk Ke Halaman User</h5>
                        @error('email')
                        <div class="alert alert-danger" role="alert">
                        {{ $message }}
                        </div>
                        @enderror
                        @error('password')
                            <div class="alert alert-danger" role="alert">
                            {{ $message }}
                            </div>
                            @enderror
                        <div class="form-group mb-3">
                            <input type="text" class="form-control"  name="email" placeholder="email" required="required">
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                        </div>
                        <div class="form-group mb-3">
                           <a href="{{route('lupa-password')}}" >Lupa Password?</a>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary btn-block">Log in</button>
                        </div>
                       
                    </form>
                    <p class="text-center"><a href="#">Belum punya akun? Buat Akun</a></p>
                </div>
            </div>
        </center>
        </div>
    </section>


</main>
@endsection
