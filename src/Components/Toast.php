<?php

namespace Enigma\BootstrapBlade\Components;

class Toast extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'toast';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->addAriaAttributes([
            'role' => 'alert',
            'aria-live' => 'assertive',
            'aria-atomic' => 'true'
        ]);

        return view()->first(['bootstrap-blade::toast', 'bootstrap-blade::default']);
    }
}
