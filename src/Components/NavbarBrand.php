<?php

namespace Enigma\BootstrapBlade\Components;

class NavbarBrand extends Link
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'navbar-brand';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        parent::render();

        return view('bootstrap-blade::navbar-brand');
    }
}
