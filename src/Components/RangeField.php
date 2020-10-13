<?php

namespace Enigma\BootstrapBlade\Components;

class RangeField extends FormField
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'form-control-range';

    /**
     * The form field type.
     *
     * @var string
     */
    public string $type = 'range';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        parent::render();

        return view('bootstrap-blade::range-field');
    }
}
