<?php

namespace Enigma\BootstrapBlade\Components;

class ListItem extends BootstrapComponent
{
    /**
     * Is the list item active?
     *
     * @var bool
     */
    public bool $active;

    /**
     * Is the list item disabled?
     *
     * @var bool
     */
    public bool $disabled;

    /**
     * Create a new component instance.
     *
     * @param bool $active
     * @param bool $disabled
     */
    public function __construct(bool $active = false, bool $disabled = false)
    {
        $this->active = $active;
        $this->disabled = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->active) {
            $this->addClass('active');
        }

        if ($this->disabled) {
            $this->addClass('disabled');
            $this->addAriaAttribute('aria-disabled', 'true');
        }

        return view()->first(["bootstrap-blade::{$this->componentBaseName()}", 'bootstrap-blade::list-item']);
    }
}
