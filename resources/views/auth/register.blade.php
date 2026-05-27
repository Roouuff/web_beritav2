@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block"
                        style="background: linear-gradient(135deg, #1cc88a 0%, #13855c 100%); display:flex; align-items:center; justify-content:center;">
                        <div class="text-center text-white p-5">
                            <i class="fas fa-user-plus fa-5x mb-3 opacity-75"></i>
                            <h3 class="font-weight-bold">Create Account</h3>
                            <p class="mb-0">Join us today and get access to all features.</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
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

                            <form class="user" method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text"
                                            class="form-control form-control-user @error('name') is-invalid @enderror"
                                            id="inputFirstName" name="name" value="{{ old('name') }}"
                                            placeholder="Full Name" required autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="email"
                                        class="form-control form-control-user @error('email') is-invalid @enderror"
                                        id="inputEmail" name="email" value="{{ old('email') }}"
                                        placeholder="Email Address" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password"
                                            class="form-control form-control-user @error('password') is-invalid @enderror"
                                            id="inputPassword" name="password" placeholder="Password" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="inputRepeatPassword" name="password_confirmation"
                                            placeholder="Repeat Password" required>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>

                                <hr>

                                <a href="{{ url('/') }}" class="btn btn-google btn-user btn-block">
                                    <i class="fas fa-home fa-fw"></i> Back to Home
                                </a>
                            </form>

                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
