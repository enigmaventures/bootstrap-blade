<?php

namespace Enigma\BootstrapBlade\Components;

class CardImage extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'card-img';

    /**
     * Place the image to the top of the card?
     *
     * @var bool
     */
    public bool $top;

    /**
     * Place the image to the bottom of the card?
     *
     * @var bool
     */
    public bool $bottom;

    /**
     * Create a new component instance.
     *
     * @param bool $top
     * @param bool $bottom
     */
    public function __construct(bool $top = false, bool $bottom = false)
    {
        $this->top = $top;
        $this->bottom = $bottom;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->top) {
            $this->replaceClass('card-img', 'card-img-top');
        }

        if ($this->bottom) {
            $this->replaceClass('card-img', 'card-img-bottom');
        }

        $this->addHtmlAttribute('alt', 'Card image');

        return view('bootstrap-blade::card-image');
    }
}
