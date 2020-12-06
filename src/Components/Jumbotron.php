<?php

namespace Enigma\BootstrapBlade\Components;

class Jumbotron extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'jumbotron';

    /**
     * Render the jumbotron with full width?
     *
     * @var bool
     */
    public bool $fluid;

    /**
     * Create a new component instance.
     *
     * @param bool $fluid
     */
    public function __construct(bool $fluid = false)
    {
        $this->fluid = $fluid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->fluid) {
            $this->addClass('jumbotron-fluid');
        }

        return view()->first(['bootstrap-blade::jumbotron', 'bootstrap-blade::default']);
    }
}
