<?php

namespace Enigma\BootstrapBlade\Components;

class FormCheck extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'form-check';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-blade::form-check');
    }
}
