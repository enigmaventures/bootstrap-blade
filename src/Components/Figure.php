<?php

namespace Enigma\BootstrapBlade\Components;

class Figure extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'figure';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-blade::figure');
    }
}
