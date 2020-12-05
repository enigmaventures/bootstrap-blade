<div {{ $attributes->merge($componentAttributes()) }}>
    @if ($indicators)
    <x-carousel-indicators :target="$hash($id)" :items="$items"/>
    @endif

    <x-carousel-inner>
        {{ $slot }}
    </x-carousel-inner>

    @if ($controls)
    <x-carousel-previous :href="$hash($id)"/>
    <x-carousel-next :href="$hash($id)"/>
    @endif
</div>
