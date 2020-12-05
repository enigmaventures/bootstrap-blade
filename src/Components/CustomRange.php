<?php

namespace Enigma\BootstrapBlade\Components;

class CustomRange extends CustomForm
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'custom-range';

    /**
     * The custom form field type.
     *
     * @var string
     */
    public string $type = 'range';

    /**
     * The custom form field's label class names.
     *
     * @var string
     */
    public string $labelClass = '';
}
