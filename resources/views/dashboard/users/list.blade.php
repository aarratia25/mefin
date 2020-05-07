@extends('layouts.dashboard')

@section('title', 'Users') 

@section('content')

<!-- Hero -->
    <x-hero page="Users" :items="['Table', 'Roles']"/>
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
            
            <x-alerts class="alert-success" :title="session('message')"/>

            <!-- Full Table -->
            <x-table class="test" :headers="[
                ['name' => 'ID'],
                ['name' => 'Name'],
                ['name' => 'Created at'],
                ['class' => 'text-center', 'name' => 'Actions']
            ]">
            
            @each('dashboard.users.item', $users, 'user', 'components.no-items')
            
            </x-table>
            <!-- END Full Table -->
        </div>
    </div>
    <!-- END Full Table -->
</div>
<!-- END Page Content -->
@endsection
