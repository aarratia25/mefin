@extends('layouts.dashboard')

@section('title', 'Roles') 

@section('content')

<!-- Hero -->
    <x-hero page="Roles" :items="['Table', 'Roles']"/>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <div class="block block-rounded block-bordered">
        <div class="block-header block-header-default">
            <h3 class="block-title">Full Table</h3>
            <button type="button" class="btn-block-option add-new-data" data-toggle="modal" data-target="#create-role" data-submit="#form-create-role" data-endpoint="roles">
                <i class="si si-settings"></i>
            </button>
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
                
                @each('dashboard.roles.item', $roles, 'role', 'components.no-items')
            
            </x-table>
            <!-- END Full Table -->
        </div>
    </div>
</div>
<!-- END Page Content -->
@endsection
@section('modal')
    
    {{-- Edit Role --}}
    <x-modal id="modal-role" title="Role Edit" class="modal-dialog-popout">
        <form action="#" method="POST" id="form-role"> 
            <div class="form-group">
                <label for="example-text-input">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Text Input">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </x-modal>

    {{-- Create Role --}}
    <x-modal id="create-role" title="Create Role" class="modal-dialog-popout">
        <form action="#" method="POST" id="form-create-role"> 
            <div class="form-group">
                <label for="example-text-input">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Text Input" id="error-fg-name">
                <div id="error-message-name"></div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </x-modal>
@endsection
