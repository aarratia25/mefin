@extends('layouts.dashboard')

@section('title', 'Users') 

@section('content')

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Users List</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Table user</li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </nav>
        </div>
   </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Full Table -->
    <div class="block block-rounded block-bordered">
        <div class="block-header block-header-default">
            <h3 class="block-title">Full Table</h3>
        </div>
        <div class="block-content">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati repellendus exercitationem sapiente eius, fuga ducimus excepturi ipsam! Nemo porro quidem a, sapiente voluptates veniam commodi totam iste quae eius dignissimos!
            </p>
            @component('components.dashboard.alerts') 
                @slot('class')
                    alert-success
                @endslot

                @slot('title')
                    {{ session('message') }}
                @endslot
            @endcomponent
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center">
                                <i class="far fa-user"></i>
                            </th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Access</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @each('dashboard.user.item', $users, 'user', 'dashboard.user.no-items')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Full Table -->
</div>
<!-- END Page Content -->
@endsection
