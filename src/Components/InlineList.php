<?php

namespace Enigma\BootstrapBlade\Components;

class InlineList extends ListElement
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'list-inline';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-blade::inline-list');
    }
}
