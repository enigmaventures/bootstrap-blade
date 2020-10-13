<?php

namespace Enigma\BootstrapBlade\Components;

class NavbarCollapse extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'collapse navbar-collapse';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-blade::navbar-collapse');
    }
}
