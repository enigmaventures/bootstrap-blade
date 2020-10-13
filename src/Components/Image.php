<?php

namespace Enigma\BootstrapBlade\Components;

class Image extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'img-fluid';

    /**
     * Is the image rendered as a thumbnail?
     *
     * @var bool
     */
    public bool $thumbnail;

    /**
     * Create a new component instance.
     *
     * @param bool $thumbnail
     */
    public function __construct(bool $thumbnail = false)
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->thumbnail) {
            $this->addClass('img-thumbnail');
        }

        return view('bootstrap-blade::image');
    }
}
