<?php

namespace Enigma\BootstrapBlade\Components;

class CarouselCaption extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'carousel-caption d-none d-md-block';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-blade::carousel-caption');
    }
}
