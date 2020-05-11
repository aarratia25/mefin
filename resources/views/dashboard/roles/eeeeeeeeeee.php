<tr {{ 'id = r-role' . $role->id }}>
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