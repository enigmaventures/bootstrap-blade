<div {{ $attributes->merge($componentAttributes()) }}>
    {{ $slot }}

    @if($dismissible)
    <x-close-icon data-dismiss="alert"/>
    @endif
</div>
