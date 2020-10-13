<div {{ $attributes->merge($componentAttributes()) }}>
    @if ($indicators)
    <x-bs-carousel-indicators :target="$hash($id)" :items="$items"/>
    @endif

    <x-bs-carousel-inner>
        {{ $slot }}
    </x-bs-carousel-inner>

    @if ($controls)
    <x-bs-carousel-previous :href="$hash($id)"/>
    <x-bs-carousel-next :href="$hash($id)"/>
    @endif
</div>
