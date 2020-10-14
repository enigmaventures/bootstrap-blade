@if ($list)
<ul {{ $attributes->merge($componentAttributes()) }}>
    {{ $slot }}
</ul>
@else
<div {{ $attributes->merge($componentAttributes()) }}>
    {{ $slot }}
</div>
@endif
