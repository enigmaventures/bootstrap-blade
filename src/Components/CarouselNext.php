<?php

namespace Enigma\BootstrapBlade\Components;

class CarouselNext extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'carousel-control-next';

    /**
     * The carousel next control's href.
     *
     * @var string
     */
    public string $href;

    /**
     * Create a new component instance.
     *
     * @param string $href
     */
    public function __construct(string $href)
    {
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->addHtmlAttribute('href', $this->href);
        $this->addAriaAttribute('role', 'button');
        $this->addDataAttribute('data-slide', 'next');

        return view('bootstrap-blade::carousel-next');
    }
}
