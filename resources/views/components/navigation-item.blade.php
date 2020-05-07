<li class="nav-main-item 
    @if( isset($dropdown) && isset($prefix) && Route::is($prefix)) 
        open
    @endif">

    <a class="nav-main-link 
        
        @if( isset($route) && Route::is($route)) 
            active
        @elseif( isset($dropdown) )
            nav-main-link-submenu
        @endif" 
        
        href="{{ isset($route) ? route($route) : '#' }}"
        
        @if( isset($dropdown) )
            data-toggle="submenu" aria-haspopup="true" aria-expanded="true"
        @endif>
        
        <i class="nav-main-link-icon si si-{{ $icon }}"></i>
        <span class="nav-main-link-name">{{ $slot }}</span>
    </a>
    
    @if ( isset($separator) )
        <li class="nav-main-heading">{{ $separator }}</li>
    @endif

    @if ( isset($dropdown) )
        <ul class="nav-main-submenu">
            @foreach ($dropdown as $item)
                <li class="nav-main-item open">
                    <a class="nav-main-link" href="{{ isset($item['route']) ? route($item['route']) : '#' }}">
                        <span class="nav-main-link-name">{{ $item['name'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</li>
