@if ($link)
<a {{ $attributes->merge($componentAttributes()) }}>{{ $slot }}</a>
@elseif ($button)
<button {{ $attributes->merge($componentAttributes()) }}>{{ $slot }}</button>
@else
<li {{ $attributes->merge($componentAttributes()) }}>{{ $slot }}</li>
@endif
