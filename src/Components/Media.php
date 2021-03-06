<?php

namespace Enigma\BootstrapBlade\Components;

class Media extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'media';

    /**
     * Render the media object as a list item?
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
