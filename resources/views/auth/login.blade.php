@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"
                        style="background: linear-gradient(135deg, #4e73df 0%, #224abe 100%); min-height: 400px; display:flex; align-items:center; justify-content:center;">
                        <div class="text-center text-white p-5">
                            <i class="fas fa-boxes fa-5x mb-3 opacity-75"></i>
                            <h3 class="font-weight-bold">Welcome Back!</h3>
                            <p class="mb-0">Sign in to access your dashboard and manage your data.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0 ps-3">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form class="user" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <input type="email"
                                        class="form-control form-control-user @error('email') is-invalid @enderror"
                                        id="inputEmail" name="email" value="{{ old('email') }}"
                                        placeholder="Enter Email Address..." required autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="password"
                                        class="form-control form-control-user @error('password') is-invalid @enderror"
                                        id="inputPassword" name="password" placeholder="Password" required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck"
                                            name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>

                                <hr>

                                <a href="{{ url('/') }}" class="btn btn-google btn-user btn-block">
                                    <i class="fas fa-home fa-fw"></i> Back to Home
                                </a>
                            </form>

                            <hr>

                            <div class="text-center">
                                @if (Route::has('password.request'))
                                    <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                                @endif
                            </div>
                            <div class="text-center">
                                @if (Route::has('register'))
                                    <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
