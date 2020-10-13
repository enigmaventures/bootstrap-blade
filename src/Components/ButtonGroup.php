<?php

namespace Enigma\BootstrapBlade\Components;

class ButtonGroup extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'btn-group';

    /**
     * Toggle a button group's active state?
     *
     * @var bool
     */
    public bool $toggle;

    /**
     * The size of the button group.
     *
     * @var string
     */
    public string $size;

    /**
     * Is the button group rendered vertically?
     *
     * @var bool
     */
    public bool $vertical;

    /**
     * Create a new component instance.
     *
     * @param bool $toggle
     * @param string $size
     * @param bool $vertical
     */
    public function __construct(bool $toggle = false, string $size = '', bool $vertical = false)
    {
        $this->toggle = $toggle;
        $this->size = $size;
        $this->vertical = $vertical;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->addAriaAttributes([
            'role' => 'group',
            'aria-label' => 'Button group'
        ]);

        if ($this->toggle) {
            $this->addClass('btn-group-toggle');
            $this->addDataAttribute('data-toggle', 'buttons');
        }

        if ($this->size) {
            $this->addClass("btn-group-{$this->size}");
        }

        if ($this->vertical) {
            $this->replaceClass('btn-group', 'btn-group-vertical');
        }

        return view('bootstrap-blade::button-group');
    }
}
