<div {{ $attributes->merge($componentAttributes()) }}>
    {{ $slot }}

    @if($dismissible)
    <x-bs-close-icon data-dismiss="alert"/>
    @endif
</div>
