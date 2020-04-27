@extends('layouts.simple')

@section('title', '503') 

@section('content')
<!-- Page Content -->
<div class="bg-image" style="background-image: url('/images/photo22@2x.jpg');">
    <div class="hero bg-white-95 align-items-sm-start">
        <div class="hero-inner">
            <div class="content content-full">
                <div class="px-3 py-5 text-center text-sm-right">
                    <div class="display-1 text-muted font-w700">503</div>
                    <h1 class="h2 font-w700 mt-5 mb-3">Oops.. You just found an error page..</h1>
                    <h2 class="h3 font-w400 text-muted mb-5">We are sorry but our service is currently not available..</h2>
                    <a class="btn btn-hero-primary" href="javascript:history.back(-1)">
                        <i class="fa fa-arrow-left mr-1"></i> Back to all Errors
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->
@endsection
