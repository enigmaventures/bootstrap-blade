<li class="{{ $containerClass }}"@if ($active) aria-current="page"@endif>
    <a {{ $attributes->merge($componentAttributes()) }}>{{ $slot }}</a>
</li>
