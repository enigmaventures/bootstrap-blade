<?php

namespace Enigma\BootstrapBlade\Components;

class Nav extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'nav';

    /**
     * Render the nav as list?
     *
     * @var bool
     */
    public bool $list;

    /**
     * Is the nav list ordered?
     *
     * @var bool
     */
    public bool $ordered;

    /**
     * Stack the nav items vertically?
     *
     * @var mixed
     */
    public $vertical;

    /**
     * Render nav items as tabs?
     *
     * @var bool
     */
    public bool $tabs;

    /**
     * Render nav items as pills?
     *
     * @var bool
     */
    public bool $pills;

    /**
     * Force nav’s contents to extend the full available width?
     *
     * @var bool
     */
    public bool $fill;

    /**
     * Fill available width and distribute evenly to nav items?
     *
     * @var bool
     */
    public bool $justified;

    /**
     * Create a new component instance.
     *
     * @param bool $list
     * @param bool $ordered
     * @param mixed $vertical
     * @param bool $tabs
     * @param bool $pills
     * @param bool $fill
     * @param bool $justified
     */
    public function __construct(
        bool $list = false,
        bool $ordered = false,
        $vertical = false,
        bool $tabs = false,
        bool $pills = false,
        bool $fill = false,
        bool $justified = false
    ) {
        $this->list = $list;
        $this->ordered = $ordered;
        $this->vertical = $vertical;
        $this->tabs = $tabs;
        $this->pills = $pills;
        $this->fill = $fill;
        $this->justified = $justified;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->vertical) {
            if (is_bool($this->vertical)) {
                $this->addClass('flex-bs-column');
            }

            if (is_string($this->vertical)) {
                $this->addClass("flex-bs-column-{$this->vertical}");
            }
        }

        if ($this->tabs) {
            $this->addClass('nav-tabs');
        }

        if ($this->pills) {
            $this->addClass('nav-pills');
        }

        if ($this->fill) {
            $this->addClass('nav-fill');
        }

        if ($this->justified) {
            $this->addClass('nav-justified');
        }

        return view('bootstrap-blade::nav');
    }
}
