@extends('layouts.simple')

@section('title', '401') 

@section('content')
<!-- Page Content -->
<div class="bg-image" style="background-image: url('/images/photo8@2x.jpg');">
    <div class="hero bg-black-75">
        <div class="hero-inner">
            <div class="content content-full">
                <div class="px-3 py-5 text-center">
                    <div class="display-1 text-danger font-w700 invisible" data-toggle="appear" data-class="animated fadeInDown">401</div>
                    <h1 class="h2 font-w700 text-white mt-5 mb-3 invisible" data-toggle="appear" data-class="animated fadeInUp">Oops.. You just found an error page..</h1>
                    <h2 class="h3 font-w400 text-white-75 mb-5 invisible" data-toggle="appear" data-class="animated fadeInUp">We are sorry but you are not authorized to access this page..</h2>
                    <div class="invisible" data-toggle="appear" data-class="animated zoomIn">
                        <a class="btn btn-hero-secondary" href="javascript:history.back(-1)">
                            <i class="fa fa-arrow-left mr-1"></i> Back to all Errors
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->
@endsection
