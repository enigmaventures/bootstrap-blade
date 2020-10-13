<?php

namespace Enigma\BootstrapBlade\Components;

class NavbarTogglerIcon extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'navbar-toggler-icon';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-blade::navbar-toggler-icon');
    }
}
