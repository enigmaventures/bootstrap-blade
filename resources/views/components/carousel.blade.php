<div {{ $attributes->merge($componentAttributes()) }}>
    @if ($indicators)
    <ol class="carousel-indicators">
        @foreach (range(0, $items - 1) as $item)
        <li data-target="{{ $hash($id) }}" data-slide-to="{{ $loop->index }}"@if ($loop->first) class="active"@endif/>
        @endforeach
    </ol>
    @endif

    <x-carousel-inner>
        {{ $slot }}
    </x-carousel-inner>

    @if ($controls)
    <x-carousel-previous :href="$hash($id)"/>
    <x-carousel-next :href="$hash($id)"/>
    @endif
</div>
