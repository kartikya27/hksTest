
@foreach($menus as $menu)
{!! $menu->isChild() ? '<div class="sub-menu">' : null !!}

    <x-menu :menu="$menu" />
{!! $menu->isChild() ? '</div>' : null !!}
@endforeach

