<tr {{ 'id = r-role' . $role->id }}>
    <td class="text-center">
        <img class="img-avatar img-avatar48" src="/images/avatar4.jpg">
    </td>
    <td>
        {{ $role->id - 1 }}
    </td>
    <td class="font-w600">
        {{ $role->name }}
    </td>
    <td>
        {{ $role->created_at->diffForHumans() }}
    </td>
    <td class="text-center">
        <div class="btn-group">

            <a href="#" 
                class="cfff btn btn-sm btn-primary js-modal-edit" 
                data-toggle="tooltip" 
                title="Edit" 
                data-id="{{ $role->id}}" 
                data-endpoint="roles"
                data-modal="#modal-role" 
                data-submit="#form-role">
                <i class="fa fa-pencil-alt"></i>
            </a>

            <a href="#" 
                class="js-swal-confirm cfff btn btn-sm btn-primary" 
                data-confirm="Yes, delete it!" 
                data-cancel="Cancel" 
                data-title="Are you sure?" 
                data-text="You will not be able to recover this imaginary file!" 
                data-id="{{ $role->id }}" 
                data-endpoint="roles"
                data-row="r-role"
                data-toggle="tooltip" 
                title="Delete">
                <i class="fa fa-times"></i>
            </a>
        </div>
    </td>
</tr>

@section('modal')
    @component('components.dashboard.modal')

        @slot('id')
            modal-role
        @endslot

        @slot('title')
            User edit
        @endslot
        
        @slot('content')
            <form action="#" method="POST" id="form-role"> 
                <div class="form-group">
                    <label for="example-text-input">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Text Input">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        @endslot
        
    @endcomponent
@endsection