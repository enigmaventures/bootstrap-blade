<?php

namespace Enigma\BootstrapBlade\Components;

class DropdownDivider extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'dropdown-divider';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-blade::dropdown-divider');
    }
}
