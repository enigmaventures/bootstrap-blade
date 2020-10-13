<?php

namespace Enigma\BootstrapBlade\Components;

class FigureImage extends Image
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'figure-img img-fluid';

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

        return view('bootstrap-blade::figure-image');
    }
}
