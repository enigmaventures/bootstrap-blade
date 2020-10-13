<nav aria-label="{{ $ariaLabel }}">
    <ul {{ $attributes->merge($componentAttributes()) }}>
        {{ $slot }}
    </ul>
</nav>
