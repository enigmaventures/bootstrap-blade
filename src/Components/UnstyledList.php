<?php

namespace Enigma\BootstrapBlade\Components;

class UnstyledList extends ListElement
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'list-unstyled';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-blade::unstyled-list');
    }
}
