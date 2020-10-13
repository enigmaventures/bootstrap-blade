@if ($label)
<label {{ $attributes->merge($componentAttributes()) }}>{{ $slot }}</label>
@else
<span {{ $attributes->merge($componentAttributes()) }}>{{ $slot }}</span>
@endif
