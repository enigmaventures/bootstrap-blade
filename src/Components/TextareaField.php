<?php

namespace Enigma\BootstrapBlade\Components;

class TextareaField extends FormField
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->setupComponentAttributes();

        $this->setupContainerClass();

        return view('bootstrap-blade::textarea-field');
    }
}
