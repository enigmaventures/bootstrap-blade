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
    <a class="carousel-control-prev" href="{{ $hash($id) }}" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="{{ $hash($id) }}" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    @endif
</div>
