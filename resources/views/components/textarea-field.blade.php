<div class="{{ $containerClass }}">
    <label for="{{ $id }}">{{ $label }}</label>
    @if ($isArrayInput)
    <textarea {{ $attributes->merge($componentAttributes()) }}>{{ old("{$arrayInputBaseName}.{$index}", $slot) }}</textarea>
    @else
    <textarea {{ $attributes->merge($componentAttributes()) }}>{{ old($name, $slot) }}</textarea>
    @endif
</div>
