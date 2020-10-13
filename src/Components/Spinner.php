<?php

namespace Enigma\BootstrapBlade\Components;

class Spinner extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'spinner-border';

    /**
     * Make the spinner grow instead of spin?
     *
     * @var bool
     */
    public bool $grow;

    /**
     * Use a smaller spinner?
     *
     * @var bool
     */
    public bool $small;

    /**
     * Use spinner within button?
     *
     * @var bool
     */
    public bool $button;

    /**
     * Create a new component instance.
     *
     * @param bool $grow
     * @param bool $small
     * @param bool $button
     */
    public function __construct(bool $grow = false, bool $small = false, bool $button = false)
    {
        $this->grow = $grow;
        $this->small = $small;
        $this->button = $button;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->addAriaAttribute('role', 'status');

        if ($this->grow) {
            $this->replaceClass('spinner-border', 'spinner-grow');
        }

        if ($this->small) {
            if ($this->grow) {
                $this->addClass('spinner-grow-sm');
            } else {
                $this->addClass('spinner-border-sm');
            }
        }

        if ($this->button) {
            $this->addAriaAttribute('aria-hidden', 'true');
        }

        return view('bootstrap-blade::spinner');
    }
}
