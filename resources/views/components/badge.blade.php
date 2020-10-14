@if ($link)
<a {{ $attributes->merge($componentAttributes()) }}>{{ $slot }}</a>
@else
<span {{ $attributes->merge($componentAttributes()) }}>{{ $slot }}</span>
@endif
