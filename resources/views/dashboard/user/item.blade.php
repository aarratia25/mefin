@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="/js/plugins/sweetalert2/sweetalert2.min.css">
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
                data-route="#" 
                class="cfff btn btn-sm btn-primary js-modal-edit" 
                data-toggle="tooltip" 
                title="Edit" 
                data-id="{{ $user->id}}" 
                data-endpoint="users"
                data-modal="#user-id-popout" 
                data-submit="#f-user">
                <i class="fa fa-pencil-alt"></i>
            </a>

            <a href="#" 
                data-confirm="Yes, delete it!" 
                data-cancel="Cancel" 
                data-title="Are you sure?" 
                data-text="You will not be able to recover this imaginary file!" 
                data-id="{{ $user->id }}" class="js-swal-confirm cfff btn btn-sm btn-primary" 
                data-toggle="tooltip" 
                title="Delete">
                <i class="fa fa-times"></i>
            </a>
        </div>
    </td>
</tr>

@section('modal')
    @component('components.dashboard.modal', ['button' => [
            'id' => 'user-edit',
            'text' => 'Done!', 
            'type' => 'submit',
            ]
        ])
        
        @slot('title')
            User edit
        @endslot
        
        @slot('content')
            <form action="{{ route('users.update', $user->id) }}" method="POST" id="f-user"> 
                <div class="form-group">
                    <label for="example-text-input">Name</label>
                    <input type="text" class="form-control" id="user-name" name="name" placeholder="Text Input">
                </div>
                <div class="form-group">
                    <label for="example-text-input">Email</label>
                    <input type="email" class="form-control" id="user-email" name="email" placeholder="Text Input">
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
    <script src="/js/plugins/es6-promise/es6-promise.auto.min.js"></script>
    <script src="/js/plugins/sweetalert2/sweetalert2.min.js"></script>

    <!-- Page JS Code -->
    <script src="/js/pages/be_comp_dialogs.js"></script>
@endsection
