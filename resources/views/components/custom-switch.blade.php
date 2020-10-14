<div class="{{ $containerClass }}">
    <input {{ $attributes->merge($componentAttributes()) }}/>
    <label for="{{ $id }}" class="{{ $labelClass }}">{{ $label }}</label>
    {{ $slot }}
</div>
