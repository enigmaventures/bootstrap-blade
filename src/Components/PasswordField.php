<?php

namespace Enigma\BootstrapBlade\Components;

class PasswordField extends FormField
{
    /**
     * The form field type.
     *
     * @var string
     */
    public string $type = 'password';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        parent::render();

        return view('bootstrap-blade::password-field');
    }
}
