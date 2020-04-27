@extends('layouts.simple')

@section('title', 'Login')

@section('content')

<!-- Page Content -->
<div class="bg-image" style="background-image: url('images/photo19@2x.jpg');">
    <div class="row no-gutters justify-content-center bg-primary-dark-op">
        <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
            <!-- Sign In Block -->
            <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-white">
                    <!-- Header -->
                    <div class="mb-2 text-center">
                        <a class="link-fx font-w700 font-size-h1" href="/">
                            <span class="text-dark">Dash</span><span class="text-primary">mix</span>
                        </a>
                        <a href="{{ route('register') }}">
                            <p class="text-uppercase font-w700 font-size-sm text-muted">Register</p>
                        </a>
                    </div>
                    <!-- END Header -->

                    <!-- Sign In Form -->
                    <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control @error('email') is-invalid @enderror"" id="email" name="email" placeholder="Email"  value="{{ old('email') }}">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-user-circle"></i>
                                    </span>
                                </div>
                                @error('email')
                                    <div class="db invalid-feedback animated fadeIn">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-asterisk"></i>
                                    </span>
                                </div>
                            </div>
                             @error('password')
                                <div class="db invalid-feedback animated fadeIn">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-left">
                            <div class="custom-control custom-checkbox custom-control-primary">
                                <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                                <label class="custom-control-label" for="remember">Remember Me</label>
                            </div>
                            <div class="font-w600 font-size-sm py-1">
                                <a href="{{ route('password.request') }}">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-hero-primary">
                                <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                            </button>
                        </div>
                    </form>
                    <!-- END Sign In Form -->
                </div>
            </div>
            <!-- END Sign In Block -->
        </div>
    </div>
</div>
<!-- END Page Content -->

@endsection
