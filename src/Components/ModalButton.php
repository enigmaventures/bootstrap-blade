<?php

namespace Enigma\BootstrapBlade\Components;

class ModalButton extends Button
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->setupComponentAttributes();

        $this->addDataAttribute('data-toggle', 'modal');

        return view('bootstrap-blade::modal-button');
    }
}
