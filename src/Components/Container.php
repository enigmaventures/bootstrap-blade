<?php

namespace Enigma\BootstrapBlade\Components;

class Container extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'container';

    /**
     * The container grid.
     *
     * @var string
     */
    public string $grid;

    /**
     * Create a new component instance.
     *
     * @param string $grid
     */
    public function __construct(string $grid = '')
    {
        $this->grid = $grid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->grid) {
            $this->replaceClass('container', "container-{$this->grid}");
        }

        return view()->first(['bootstrap-blade::container', 'bootstrap-blade::default']);
    }
}
