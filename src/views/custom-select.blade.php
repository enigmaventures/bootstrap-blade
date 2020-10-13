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
