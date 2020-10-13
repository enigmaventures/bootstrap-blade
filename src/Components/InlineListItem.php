<?php

namespace Enigma\BootstrapBlade\Components;

class InlineListItem extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'list-inline-item';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-blade::inline-list-item');
    }
}
