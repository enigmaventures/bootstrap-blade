<?php

namespace Enigma\BootstrapBlade\Components;

class Embed extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'embed-responsive';

    /**
     * The embedded component's aspect ratio.
     *
     * @var string
     */
    public string $aspectRatio;

    /**
     * Create a new component instance.
     *
     * @param string $aspectRatio
     */
    public function __construct(string $aspectRatio = '1by1')
    {
        $this->aspectRatio = $aspectRatio;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->addClass("embed-responsive-{$aspectRatio}");

        return view()->first(['bootstrap-blade::embed', 'bootstrap-blade::default']);
    }
}
