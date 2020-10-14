@if ($heading)
<{{ $heading }} {{ $attributes->merge($componentAttributes()) }}>{{ $text ?: $slot }}</{{ $heading }}>
@else
<div {{ $attributes->merge($componentAttributes()) }}>
    {{ $text ?: $slot }}
</div>
@endif
