<form method="{{ $method }}" action="{{ $action }}">
    @csrf

    <x-bs-button type="submit" class="{{ $class }}">{{ $slot }}</x-bs-button>
</form>
