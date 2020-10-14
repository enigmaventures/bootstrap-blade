@if ($button)
<button {{ $attributes->merge($componentAttributes()) }}>{{ $slot }}</button>
@else
<a {{ $attributes->merge($componentAttributes()) }}>{{ $slot }}</a>
@endif
