<div {{ $attributes->merge($componentAttributes()) }}>
    @if ($indicators)
    <ol class="carousel-indicators">
        @foreach (range(0, $items - 1) as $item)
        <li data-target="{{ $hash($id) }}" data-slide-to="{{ $loop->index }}"@if ($loop->first) class="active"@endif/>
        @endforeach
    </ol>
    @endif

    <div class="carousel-inner" role="listbox">
        {{ $slot }}
    </div>

    @if ($controls)
    <a class="carousel-control-prev" href="{{ $hash($id) }}">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <x-carousel-next :href="$hash($id)"/>
    @endif
</div>
