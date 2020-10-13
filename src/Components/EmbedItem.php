<?php

namespace Enigma\BootstrapBlade\Components;

class EmbedItem extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'embed-responsive-item';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-blade::embed-item');
    }
}
