@extends('layouts.dashboard')

@section('title', 'Roles') 

@section('content')

@component('components.dashboard.hero', ['items' => ['Table', 'Roles'] ])
    @slot('page')
        Roles
    @endslot
@endcomponent

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
                            <th>ID</th>
                            <th>Name</th>
                            <th>Created at</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @each('dashboard.roles.item', $roles, 'role', 'dashboard.roles.no-items')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END Full Table -->
</div>
<!-- END Page Content -->
@endsection
