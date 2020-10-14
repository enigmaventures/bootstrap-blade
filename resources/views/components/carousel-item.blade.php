<div {{ $attributes->merge($componentAttributes()) }}>
    <img src="{{ $src }}" class="d-block w-100" alt="{{ $alt }}">

    {{ $slot }}
</div>
