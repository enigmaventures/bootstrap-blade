<?php

namespace Enigma\BootstrapBlade\Components;

class Alert extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'alert';

    /**
     * The alert variant.
     *
     * @var string
     */
    public string $variant;

    /**
     * Is the alert dismissible?
     *
     * @var bool
     */
    public bool $dismissible;

    /**
     * Create a new component instance.
     *
     * @param string $variant
     * @param bool $dismissible
     */
    public function __construct(string $variant = 'primary', bool $dismissible = false)
    {
        $this->variant = $variant;
        $this->dismissible = $dismissible;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->addClass("alert-{$this->variant}");

        $this->addAriaAttribute('role', 'alert');

        if ($this->dismissible) {
            $this->addClass("alert-dismissible fade show");
        }

        return view('bootstrap-blade::alert');
    }
}
