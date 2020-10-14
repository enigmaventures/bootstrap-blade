@if ($grid)
<div class="{{ $containerClass }}">
    <div class="{{ $inputGridClass }} {{ $offsetGridClass }}">
        <div class="form-check">
            <input {{ $attributes->merge($componentAttributes()) }}/>
            <label for="{{ $id }}" class="form-check-label">{{ $label }}</label>
            {{ $slot }}
        </div>
    </div>
</div>
@else
<div class="{{ $containerClass }}">
    <input {{ $attributes->merge($componentAttributes()) }}/>
    <label for="{{ $id }}" class="form-check-label">{{ $label }}</label>
    {{ $slot }}
</div>
@endif
