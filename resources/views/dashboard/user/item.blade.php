@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ mix('css/plugins.css') }}">
@endsection

<tr {{ 'id = i-user-' . $user->id }}>
    <td class="text-center">
        <img class="img-avatar img-avatar48" src="/images/avatar4.jpg">
    </td>
    <td class="font-w600">
        {{ $user->name }}
    </td>
    <td>
        {{ $user->email }}
    </td>
    <td>
        <span class="badge badge-info">Business</span>
    </td>
    <td class="text-center">
        <div class="btn-group">

            <a href="#" 
                class="cfff btn btn-sm btn-primary js-modal-edit" 
                data-toggle="tooltip" 
                title="Edit" 
                data-id="{{ $user->id}}" 
                data-endpoint="users"
                data-modal="#modal-popout" 
                data-submit="#form-user">
                <i class="fa fa-pencil-alt"></i>
            </a>

            <a href="#" 
                class="js-swal-confirm cfff btn btn-sm btn-primary" 
                data-confirm="Yes, delete it!" 
                data-cancel="Cancel" 
                data-title="Are you sure?" 
                data-text="You will not be able to recover this imaginary file!" 
                data-id="{{ $user->id }}" 
                data-toggle="tooltip" 
                title="Delete">
                <i class="fa fa-times"></i>
            </a>
        </div>
    </td>
</tr>

@section('modal')
    @component('components.dashboard.modal')
        
        @slot('title')
            User edit
        @endslot
        
        @slot('content')
            <form action="{{ route('users.update', $user->id) }}" method="POST" id="form-user"> 
                <div class="form-group">
                    <label for="example-text-input">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Text Input">
                </div>
                <div class="form-group">
                    <label for="example-text-input">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Text Input">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        @endslot
        
    @endcomponent
@endsection

@section('js_after')
   <!-- Page JS Plugins -->
    <script src="{{ mix('js/plugins.js') }}"></script>
@endsection
