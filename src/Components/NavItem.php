<?php

namespace Enigma\BootstrapBlade\Components;

class NavItem extends ListItem
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'nav-item';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->active) {
            $this->addClass('active');
        }

        return view('bootstrap-blade::nav-item');
    }
}
