<?php

namespace Enigma\BootstrapBlade\Components;

class DropdownItemText extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'dropdown-item-text';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-blade::dropdown-item-text');
    }
}
