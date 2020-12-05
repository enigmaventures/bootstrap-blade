<div class="{{ $containerClass }}">
    <label for="{{ $id }}" class="{{ $labelClass }}">{{ $label }}</label>
    <input {{ $attributes->merge($componentAttributes()) }}/>
    {{ $slot }}
</div>
