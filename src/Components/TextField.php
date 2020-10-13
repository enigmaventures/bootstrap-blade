<?php

namespace Enigma\BootstrapBlade\Components;

class TextField extends FormField
{
    /**
     * The form field type.
     *
     * @var string
     */
    public string $type = 'text';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        parent::render();

        return view('bootstrap-blade::text-field');
    }
}
