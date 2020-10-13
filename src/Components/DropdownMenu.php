<?php

namespace Enigma\BootstrapBlade\Components;

class DropdownMenu extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'dropdown-menu';

    /**
     * Right align the dropdown menu?
     *
     * @var bool
     */
    public bool $right;

    /**
     * Render the dropdown menu as form?
     *
     * @var bool
     */
    public bool $form;

    /**
     * Create a new component instance.
     *
     * @param bool $right
     * @param bool $form
     */
    public function __construct(bool $right = false, bool $form = false)
    {
        $this->right = $right;
        $this->form = $form;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->right) {
            $this->addClass('dropdown-menu-right');
        }

        return view('bootstrap-blade::dropdown-menu');
    }
}
