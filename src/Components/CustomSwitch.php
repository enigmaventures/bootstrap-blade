<?php

namespace Enigma\BootstrapBlade\Components;

class CustomSwitch extends CustomCheckbox
{
    /**
     * The custom form field's default container class names.
     *
     * @var string
     */
    public string $defaultContainerClass = 'custom-control custom-switch';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->setupComponentAttributes();

        $this->setupContainerClass();

        $this->markAsChecked();

        return view('bootstrap-blade::custom-switch');
    }
}
