<?php

namespace Enigma\BootstrapBlade\Components;

class Row extends Grid
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'row';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->setupGridClasses('row-cols');

        return view('bootstrap-blade::row');
    }
}
