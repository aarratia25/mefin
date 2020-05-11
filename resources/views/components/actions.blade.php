<a 
    href="javascript:Dashmix.viewData({{ $id }}, 'roles', '#modal-role', '#form-role')" 
    class="cfff btn btn-sm btn-primary" 
    data-toggle="tooltip" 
    title="Edit">
    <i class="fa fa-pencil-alt"></i>
</a>

<a href="#" 
    class="js-swal-confirm cfff btn btn-sm btn-primary" 
    data-confirm="Yes, delete it!" 
    data-cancel="Cancel" 
    data-title="Are you sure?" 
    data-text="You will not be able to recover this imaginary file!" 
    data-id="{{ $id }}" 
    data-endpoint="users"
    data-row="r-user"
    data-toggle="tooltip" 
    title="Delete">
    <i class="fa fa-times"></i>
</a>