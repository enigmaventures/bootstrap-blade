<?php

namespace Enigma\BootstrapBlade\Components;

class NavItemLink extends Link
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'nav-item nav-link';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-blade::nav-item-link');
    }
}
