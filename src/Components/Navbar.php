<?php

namespace Enigma\BootstrapBlade\Components;

class Navbar extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'navbar';

    /**
     * Responsively collapse navbar at defined breakpoint.
     *
     * @var string
     */
    public string $expand;

    /**
     * Use dark color scheme for navbar?
     *
     * @var bool
     */
    public bool $dark;

    /**
     * The navbar's background color.
     *
     * @var string
     */
    public string $bg;

    /**
     * Create a new component instance.
     *
     * @param string $expand
     * @param bool $dark
     * @param string $bg
     */
    public function __construct(string $expand = 'md', bool $dark = false, string $bg = 'white')
    {
        $this->expand = $expand;
        $this->dark = $dark;
        $this->bg = $bg;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->addClass("navbar-expand-{$this->expand}");

        if ($this->dark) {
            $this->addClass('navbar-dark');
        } else {
            $this->addClass('navbar-light');
        }

        $this->addClass("bg-{$this->bg}");

        return view('bootstrap-blade::navbar');
    }
}
