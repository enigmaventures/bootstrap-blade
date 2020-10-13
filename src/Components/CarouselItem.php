<?php

namespace Enigma\BootstrapBlade\Components;

class CarouselItem extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'carousel-item';

    /**
     * The carousel item's image src.
     *
     * @var string
     */
    public string $src;

    /**
     * The carousel item's image alt.
     *
     * @var string
     */
    public string $alt;

    /**
     * Is the carousel item in active state?
     *
     * @var bool
     */
    public bool $active;

    /**
     * Create a new component instance.
     *
     * @param string $src
     * @param string $alt
     * @param bool $active
     */
    public function __construct(string $src, string $alt = 'Carousel image', bool $active = false)
    {
        $this->src = $src;
        $this->alt = $alt;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->active) {
            $this->addClass('active');
        }

        $this->addAriaAttribute('role', 'option');

        return view('bootstrap-blade::carousel-item');
    }
}
