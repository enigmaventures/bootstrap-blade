<?php

namespace Enigma\BootstrapBlade\Components;

class CarouselPrevious extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'carousel-control-prev';

    /**
     * The carousel previous control's href.
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
        $this->addDataAttribute('data-slide', 'prev');

        return view('bootstrap-blade::carousel-previous');
    }
}
