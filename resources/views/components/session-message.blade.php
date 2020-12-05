@if (session($type))
@switch ($type)
    @case ('success')
        <x-alert variant="success" dismissible>
            {{ $text ?: $slot->__toString() ?: session('success') }}
        </x-alert>
        @break

    @case ('info')
        <x-alert variant="info" dismissible>
            {{ $text ?: $slot->__toString() ?: session('info') }}
        </x-alert>
        @break

    @case ('warning')
        <x-alert variant="warning" dismissible>
            {{ $text ?: $slot->__toString() ?: session('warning') }}
        </x-alert>
        @break

    @case ('error')
        <x-alert variant="danger" dismissible>
            {{ $text ?: $slot->__toString() ?: session('danger') }}
        </x-alert>
        @break

    @default
        <x-alert variant="success" dismissible>
            {{ $text ?: $slot->__toString() ?: session($type) }}
        </x-alert>
@endswitch
@endif
