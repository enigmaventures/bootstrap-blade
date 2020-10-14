@if ($text)
<div class="{{ $containerClass }}">
    <span {{ $attributes->merge($componentAttributes()) }}>{{ $text }}</span>
</div>
@else
<div class="{{ $containerClass }}">
    <div {{ $attributes->merge($componentAttributes()) }}>
        {{ $slot }}
    </div>
</div>
@endif
