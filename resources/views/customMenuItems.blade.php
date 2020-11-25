
@foreach($items as $menu)
    <li {{ (URL::current() == $item->url()) ? "class=active" : '' }}>
        <a href="{{ $menu->url() }}">{{ $menu->title }}</a>
        @if($menu->hasChildren())
            <ul class="sub-menu">
                @include(env('THEME').'.customMenuItems', ['items'=>$item->children()])
            </ul>
        @endif
    </li>
@endforeach
