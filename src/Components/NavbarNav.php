<?php

namespace Enigma\BootstrapBlade\Components;

class NavbarNav extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'navbar-nav';

    /**
     * Render the navbar nav as list?
     *
     * @var bool
     */
    public bool $list;

    /**
     * Create a new component instance.
     *
     * @param bool $list
     */
    public function __construct(bool $list = false)
    {
        $this->list = $list;
    }
}
