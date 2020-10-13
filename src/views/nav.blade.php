@if ($list)
@if ($ordered)
<ol {{ $attributes->merge($componentAttributes()) }}>
    {{ $slot }}
</ol>
@else
<ul {{ $attributes->merge($componentAttributes()) }}>
    {{ $slot }}
</ul>
@endif
@else
<nav {{ $attributes->merge($componentAttributes()) }}>
    {{ $slot }}
</nav>
@endif
