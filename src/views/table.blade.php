@if ($responsive)
<div class="{{ $containerClass }}">
    <table {{ $attributes->merge($componentAttributes()) }}>
        {{ $slot }}
    </table>
</div>
@else
<table {{ $attributes->merge($componentAttributes()) }}>
    {{ $slot }}
</table>
@endif
