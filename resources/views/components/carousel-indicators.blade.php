<ol {{ $attributes->merge($componentAttributes()) }}>
    @foreach (range(0, $items - 1) as $item)
    <li data-target="{{ $target }}" data-slide-to="{{ $loop->index }}"@if ($loop->first) class="active"@endif/>
    @endforeach
</ol>
