<?php

namespace Enigma\BootstrapBlade\Components;

class NavbarToggler extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'navbar-toggler';

    /**
     * The navbar toggler's target element.
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
        $this->addHtmlAttribute('type', 'button');

        $this->addDataAttributes([
            'data-toggle' => 'collapse',
            'data-target' => $this->href
        ]);

        $this->addAriaAttributes([
            'aria-expanded' => 'false',
            'aria-controls' => $this->unhash($this->href)
        ]);

        return view('bootstrap-blade::navbar-toggler');
    }
}
