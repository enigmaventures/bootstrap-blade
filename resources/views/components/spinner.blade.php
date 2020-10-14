@if ($button)
<span {{ $attributes->merge($componentAttributes()) }}></span>
<span class="sr-only">Loading...</span>
@else
<div {{ $attributes->merge($componentAttributes()) }}>
    <span class="sr-only">Loading...</span>
</div>
@endif
