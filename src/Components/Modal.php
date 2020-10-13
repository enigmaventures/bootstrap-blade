<?php

namespace Enigma\BootstrapBlade\Components;

class Modal extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'modal';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->addHtmlAttribute('tabindex', '-1');
        $this->addAriaAttribute('role', 'dialog');

        return view('bootstrap-blade::modal');
    }
}
