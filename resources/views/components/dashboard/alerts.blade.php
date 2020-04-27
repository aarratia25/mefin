{{-- alert-success, alert-info, alert-warning, alert-danger --}}
@if( html_entity_decode($title) !== '' )
    <div class="alert {{ $class }}  alert-dismissable" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="alert-heading font-size-h4 my-2">{{ $title }}</h3>
        <p class="mb-0">{{ $description ?? '' }}</p>
    </div>
@endif