@if ($link)
<a {{ $attributes->merge($componentAttributes()) }}>{{ $slot }}</a>
@elseif ($input)
<input {{ $attributes->merge($componentAttributes()) }}/>
@elseif ($label)
<label {{ $attributes->merge($componentAttributes()) }}>{{ $slot }}</label>
@else
<button {{ $attributes->merge($componentAttributes()) }}>{{ $slot }}</button>
@endif
