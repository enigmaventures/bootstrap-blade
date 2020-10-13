<?php

namespace Enigma\BootstrapBlade\Components;

class ButtonToolbar extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'btn-toolbar';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->addAriaAttributes([
            'role' => 'toolbar',
            'aria-label' => 'Button toolbar'
        ]);

        return view('bootstrap-blade::button-toolbar');
    }
}
