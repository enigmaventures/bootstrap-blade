<?php

namespace Enigma\BootstrapBlade\Components;

class FormButton extends Form
{
    /**
     * Create a new component instance.
     *
     * @param string $method
     * @param string $action
     */
    public function __construct(string $method = 'POST', string $action = '')
    {
        parent::__construct($method, $action);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-blade::form-button');
    }
}
