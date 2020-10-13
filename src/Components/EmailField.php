<?php

namespace Enigma\BootstrapBlade\Components;

class EmailField extends FormField
{
    /**
     * The form field type.
     *
     * @var string
     */
    public string $type = 'email';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        parent::render();

        return view('bootstrap-blade::email-field');
    }
}
