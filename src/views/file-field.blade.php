@if ($grid)
<div class="{{ $containerClass }}">
    <label for="{{ $id }}" class="{{ $labelGridClass }} col-form-label text-md-right">{{ $label }}</label>

    <div class="{{ $inputGridClass }}">
        @error($name)
        <input {!! $splitAttributes($attributes, 'is-invalid') !!}/>
        @else
        <input {{ $attributes->merge($componentAttributes()) }}/>
        @enderror

        {{ $slot }}

        @error($name)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
@else
<div class="{{ $containerClass }}">
    <label for="{{ $id }}">{{ $label }}</label>

    @error($name)
    <input {!! $splitAttributes($attributes, 'is-invalid') !!}/>
    @else
    <input {{ $attributes->merge($componentAttributes()) }}/>
    @enderror

    {{ $slot }}

    @error($name)
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>
@endif
