@component('components.dashboard.alerts') 

    @slot('class')
        alert-warning
    @endslot

    @slot('title')
       Warning
    @endslot

    @slot('description')
        This is a warning message
    @endslot

@endcomponent