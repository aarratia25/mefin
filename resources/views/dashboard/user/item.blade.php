@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="/js/plugins/sweetalert2/sweetalert2.min.css">
@endsection

@if ($edit = $edit ?? false)
    <form action="{{ route('users.update', $user->id) }}" method="POST">
    @method('PUT')
    @csrf
@endif

<tr {{ 'id = i-user' . $user->id }}>
    <td class="text-center">
        <img class="img-avatar img-avatar48" src="/images/avatar4.jpg" alt="">
    </td>
    <td class="font-w600">
        @if ($edit)
            <input class="form-control" type="text" name="name" value="{{ $user->name }}">
        @else 
            <a href="#">{{ $user->name }}</a>
        @endif
    </td>
    <td>
        @if ($edit)
            <input class="form-control" type="email" name="email" value="{{ $user->email }}">
        @else 
            <a href="#">{{ $user->email }}</a>
        @endif
    </td>
    <td>
        <span class="badge badge-info">Business</span>
    </td>
    <td class="text-center">
        <div class="btn-group">

            @if ($edit)
                <button type="submit" class="btn btn-sm btn-success" data-toggle="tooltip" title="Save">
                    <i class="fa fa-save"></i>
                </button>
            @else
                <a href="{{ route('users.edit', $user->id) }}" class="cfff btn btn-sm btn-primary" data-toggle="tooltip" title="Edit">
                    <i class="fa fa-pencil-alt"></i>
                </a>
            @endif

            <a href="#" data-id="{{ $user->id }}" class="js-swal-confirm cfff btn btn-sm btn-primary" data-toggle="tooltip" title="Delete">
                <i class="fa fa-times"></i>
            </a>
        </div>
    </td>
</tr>

@if($edit)
    </form>
@endif

@section('js_after')
   <!-- Page JS Plugins -->
    <script src="/js/plugins/es6-promise/es6-promise.auto.min.js"></script>
    <script src="/js/plugins/sweetalert2/sweetalert2.min.js"></script>

    <!-- Page JS Code -->
    <script src="/js/pages/be_comp_dialogs.js"></script>
@endsection