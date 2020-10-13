<?php

namespace Enigma\BootstrapBlade\Components;

class CarouselIndicators extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'carousel-indicators';

    /**
     * The carousel indicators' target element.
     *
     * @var string
     */
    public string $target;

    /**
     * The number of carousel indicators to render.
     *
     * @var int
     */
    public int $items;

    /**
     * Create a new component instance.
     *
     * @param string $target
     * @param int $items
     */
    public function __construct(string $target, int $items = 3)
    {
        $this->target = $target;
        $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-blade::carousel-indicators');
    }
}
