<?php

namespace Enigma\BootstrapBlade\Components;

class InputGroupPrepend extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'input-group-prepend';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-blade::input-group-prepend');
    }
}
