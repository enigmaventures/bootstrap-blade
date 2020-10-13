<?php

namespace Enigma\BootstrapBlade\Components;

class Breadcrumb extends BootstrapComponent
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->addAriaAttribute('aria-label', 'breadcrumb');

        return view('bootstrap-blade::breadcrumb');
    }
}
