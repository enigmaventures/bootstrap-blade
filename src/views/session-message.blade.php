@if (session($type))
@switch ($type)
    @case ('success')
        <x-bs-alert variant="success" dismissible>
            {{ $text ?: $slot->__toString() ?: session('success') }}
        </x-bs-alert>
        @break

    @case ('info')
        <x-bs-alert variant="info" dismissible>
            {{ $text ?: $slot->__toString() ?: session('info') }}
        </x-bs-alert>
        @break

    @case ('warning')
        <x-bs-alert variant="warning" dismissible>
            {{ $text ?: $slot->__toString() ?: session('warning') }}
        </x-bs-alert>
        @break

    @case ('error')
        <x-bs-alert variant="danger" dismissible>
            {{ $text ?: $slot->__toString() ?: session('danger') }}
        </x-bs-alert>
        @break

    @default
        <x-bs-alert variant="success" dismissible>
            {{ $text ?: $slot->__toString() ?: session($type) }}
        </x-bs-alert>
@endswitch
@endif
