@if ($form)
<form {{ $attributes->merge($componentAttributes()) }}>
    {{ $slot }}
</form>
@else
<div {{ $attributes->merge($componentAttributes()) }}>
    {{ $slot }}
</div>
@endif
