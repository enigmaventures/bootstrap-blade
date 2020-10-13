<?php

namespace Enigma\BootstrapBlade\Components;

class BlockquoteFooter extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'blockquote-footer';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-blade::blockquote-footer');
    }
}
