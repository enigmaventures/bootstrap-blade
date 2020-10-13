<?php

namespace Enigma\BootstrapBlade\Components;

class DropdownToggle extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'dropdown-toggle';

    /**
     * The dropdown toggle's href.
     *
     * @var string
     */
    public string $href;

    /**
     * Create a new component instance.
     *
     * @param string $href
     */
    public function __construct(string $href = '#')
    {
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->addHtmlAttribute('href', $this->href);

        $this->addDataAttribute('data-toggle', 'dropdown');

        $this->addAriaAttributes([
            'role' => 'button',
            'aria-haspopup' => 'true',
            'aria-expanded' => 'false'
        ]);

        return view('bootstrap-blade::dropdown-toggle');
    }
}
