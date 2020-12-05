<form method="{{ $method }}" action="{{ $action }}">
    @csrf

    <x-button type="submit" class="{{ $class }}">{{ $slot }}</x-button>
</form>
