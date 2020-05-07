<div class="table-responsive">
    <table class="table table-bordered table-striped table-vcenter"> 
        <thead>
            <tr>
              @foreach ($headers as $header)
                <th class="{{ $header['class'] ?? null }}">
                    {!! $header['name'] ?? '<i class="far '.$header['icon'].'"></i>' !!}
                </th>
              @endforeach
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>
