<form {{ $attributes->merge($componentAttributes()) }}>
    @csrf

    {{ $slot }}
</form>
