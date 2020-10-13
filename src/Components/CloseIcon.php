<?php

namespace Enigma\BootstrapBlade\Components;

class CloseIcon extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'close';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->addHtmlAttribute('type', 'button');
        $this->addAriaAttribute('aria-label', 'Close');

        return view('bootstrap-blade::close-icon');
    }
}
