@if ($block)
<div {{ $attributes->merge($componentAttributes()) }}>
    {{ $slot }}
</div>
@elseif ($ordered)
<ol {{ $attributes->merge($componentAttributes()) }}>
    {{ $slot }}
</ol>
@else
<ul {{ $attributes->merge($componentAttributes()) }}>
    {{ $slot }}
</ul>
@endif
