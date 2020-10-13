@if ($link)
<a {{ $attributes->merge($componentAttributes()) }}>{{ $slot }}</a>
@else
<button {{ $attributes->merge($componentAttributes()) }}>{{ $slot }}</button>
@endif
