<?php

namespace Enigma\BootstrapBlade\Components;

class Table extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'table';

    /**
     * Render the table with light text on dark backgrounds?
     *
     * @var bool
     */
    public bool $dark;

    /**
     * Add zebra-striping to table rows?
     *
     * @var bool
     */
    public bool $striped;

    /**
     * Add borders on all sides of the table and cells?
     *
     * @var bool
     */
    public bool $bordered;

    /**
     * Render table without borders?
     *
     * @var bool
     */
    public bool $borderless;

    /**
     * Enable hover state on table rows?
     *
     * @var bool
     */
    public bool $hoverable;

    /**
     * Make table more compact by cutting cell padding in half?
     *
     * @var bool
     */
    public bool $small;

    /**
     * Make table responsive for scrolling horizontally with ease?
     *
     * @var mixed
     */
    public $responsive;

    /**
     * The table's container class names.
     *
     * @var string
     */
    public string $containerClass;

    /**
     * Create a new component instance.
     *
     * @param bool $dark
     * @param bool $striped
     * @param bool $bordered
     * @param bool $borderless
     * @param bool $hoverable
     * @param bool $small
     * @param mixed $responsive
     * @param string $containerClass
     */
    public function __construct(
        bool $dark = false,
        bool $striped = false,
        bool $bordered = false,
        bool $borderless = false,
        bool $hoverable = false,
        bool $small = false,
        $responsive = false,
        string $containerClass = ''
    ) {
        $this->dark = $dark;
        $this->striped = $striped;
        $this->bordered = $bordered;
        $this->borderless = $borderless;
        $this->hoverable = $hoverable;
        $this->small = $small;
        $this->responsive = $responsive;
        $this->containerClass = $containerClass;
    }

    /**
     * Setup container class.
     *
     */
    protected function setupContainerClass()
    {
        if ($this->responsive) {
            if (is_bool($this->responsive)) {
                $containerClass = 'table-responsive';
            }

            if (is_string($this->responsive)) {
                $containerClass = "table-responsive-{$this->responsive}";
            }

            if ($this->containerClass) {
                $this->containerClass = "{$containerClass} {$this->containerClass}";
            } else {
                $this->containerClass = $containerClass;
            }
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->dark) {
            $this->addClass('table-dark');
        }

        if ($this->striped) {
            $this->addClass('table-striped');
        }

        if ($this->bordered) {
            $this->addClass('table-bordered');
        }

        if ($this->borderless) {
            $this->addClass('table-borderless');
        }

        if ($this->hoverable) {
            $this->addClass('table-hover');
        }

        if ($this->small) {
            $this->addClass('table-sm');
        }

        if ($this->responsive) {
            $this->setupContainerClass();
        }

        return view('bootstrap-blade::table');
    }
}
