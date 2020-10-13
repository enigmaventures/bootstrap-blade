<?php

namespace Enigma\BootstrapBlade\Components;

class Column extends Grid
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'col';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->setupGridClasses('col');

        $this->setupOffsetClasses('offset');

        return view('bootstrap-blade::column');
    }
}
