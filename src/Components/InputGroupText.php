<?php

namespace Enigma\BootstrapBlade\Components;

class InputGroupText extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'input-group-text';

    /**
     * Render input group text as label element?
     *
     * @var bool
     */
    public bool $label;

    /**
     * Create a new component instance.
     *
     * @param bool $label
     */
    public function __construct(bool $label = false)
    {
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-blade::input-group-text');
    }
}
