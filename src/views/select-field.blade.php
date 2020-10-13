@if ($grid)
<div class="{{ $containerClass }}">
    <label for="{{ $id }}" class="{{ $labelGridClass }} col-form-label text-md-right">{{ $label }}</label>

    <div class="{{ $inputGridClass }}">
        <select {{ $attributes->merge($componentAttributes()) }}>
            @if ($options)
            @foreach ($options as $value => $option)
            @if ($isSelected($value))
            <option value="{{ $value }}" selected>{{ $option }}</option>
            @else
            <option value="{{ $value }}">{{ $option }}</option>
            @endif
            @endforeach
            @else
            {{ $slot }}
            @endif
        </select>
    </div>
</div>
@else
<div class="{{ $containerClass }}">
    <label for="{{ $id }}">{{ $label }}</label>
    <select {{ $attributes->merge($componentAttributes()) }}>
        @if ($options)
        @foreach ($options as $value => $option)
        @if ($isSelected($value))
        <option value="{{ $value }}" selected>{{ $option }}</option>
        @else
        <option value="{{ $value }}">{{ $option }}</option>
        @endif
        @endforeach
        @else
        {{ $slot }}
        @endif
    </select>
</div>
@endif
