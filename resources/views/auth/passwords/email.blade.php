@extends('layouts.auth')

@section('title', 'Forgot Password')

@section('content')
<div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block"
                        style="background: linear-gradient(135deg, #f6c23e 0%, #dda20a 100%); display:flex; align-items:center; justify-content:center; min-height:350px;">
                        <div class="text-center text-white p-5">
                            <i class="fas fa-key fa-5x mb-3 opacity-75"></i>
                            <h3 class="font-weight-bold">Forgot Password?</h3>
                            <p class="mb-0">No worries! Enter your email and we'll send you reset instructions.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                            </div>

                            <p class="mb-4 text-center text-muted small">
                                We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!
                            </p>

                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0 ps-3">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form class="user" method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email"
                                        class="form-control form-control-user @error('email') is-invalid @enderror"
                                        id="exampleInputEmail" name="email" value="{{ old('email') }}"
                                        placeholder="Enter Email Address..." required autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Reset Password
                                </button>
                            </form>

                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{ route('register') }}">Create an Account!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
