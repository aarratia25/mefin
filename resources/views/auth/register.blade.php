@extends('layouts.simple')

@section('title', 'Register')

@section('content')
<!-- Page Content -->
<div class="bg-image" style="background-image: url('/images/photo14@2x.jpg');">
    <div class="row no-gutters justify-content-center bg-black-75">
        <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
            <!-- Sign Up Block -->
            <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-white">
                    <!-- Header -->
                    <div class="mb-2 text-center">
                        <a class="link-fx text-success font-w700 font-size-h1" href="{{ route('login') }}">
                            <span class="text-dark">Dash</span><span class="text-success">mix</span>
                        </a>
                        <a href="{{ route('login') }}">
                            <p class="text-uppercase font-w700 font-size-sm text-muted">Login</p>
                        </a>
                    </div>
                    <!-- END Header -->

                    <!-- Sign Up Form -->
                    <form class="js-validation-signup" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-user-circle"></i>
                                    </span>
                                </div>
                            </div>
                            @error('name')
                                <div class="db invalid-feedback animated fadeIn">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="E-Mail Addres" value="{{ old('email') }}">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-envelope-open"></i>
                                    </span>
                                </div>
                            </div>
                            @error('email')
                                <div class="db invalid-feedback animated fadeIn">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
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
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password Confirm">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-asterisk"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <a class="font-w600 font-size-sm" href="#" data-toggle="modal" data-target="#modal-terms">Terms &amp; Conditions</a>
                            <div class="custom-control custom-checkbox custom-control-primary">
                                <input type="checkbox" class="custom-control-input" id="signup-terms" name="signup-terms">
                                <label class="custom-control-label" for="signup-terms">I agree</label>
                            </div>
                        </div>

                        @component('components.auth.terms') @endcomponent

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-hero-success">
                                <i class="fa fa-fw fa-plus mr-1"></i> Sign Up
                            </button>
                        </div>
                    </form>
                    <!-- END Sign Up Form -->
                </div>
            </div>
        </div>
        <!-- END Sign Up Block -->
    </div>
</div>
<!-- END Page Content -->
@endsection
