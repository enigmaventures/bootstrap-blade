@if ($list)
<li {{ $attributes->merge($componentAttributes()) }}>
    {{ $slot }}
</li>
@else
<div {{ $attributes->merge($componentAttributes()) }}>
    {{ $slot }}
</div>
@endif
