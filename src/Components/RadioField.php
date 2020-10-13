<?php

namespace Enigma\BootstrapBlade\Components;

class RadioField extends CheckboxField
{
    /**
     * The form field type.
     *
     * @var string
     */
    public string $type = 'radio';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->setupComponentAttributes();

        $this->setupContainerClass();

        $this->setupGridClasses();

        $this->markAsChecked();

        return view('bootstrap-blade::radio-field');
    }
}
