<?php

namespace Enigma\BootstrapBlade\Components;

class CarouselInner extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'carousel-inner';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->addAriaAttribute('role', 'listbox');

        return view('bootstrap-blade::carousel-inner');
    }
}
