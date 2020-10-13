<?php

namespace Enigma\BootstrapBlade\Components;

class Carousel extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'carousel slide';

    /**
     * The carousel id.
     *
     * @var string
     */
    public string $id;

    /**
     * Should the carousel have previous and next controls?
     *
     * @var bool
     */
    public bool $controls;

    /**
     * Should the carousel have indicators?
     *
     * @var bool
     */
    public bool $indicators;

    /**
     * The number of carousel indicators to render.
     *
     * @var int
     */
    public int $items;

    /**
     * Create a new component instance.
     *
     * @param string $id
     * @param bool $controls
     * @param bool $indicators
     * @param int $items
     */
    public function __construct(string $id, bool $controls = false, bool $indicators = false, int $items = 3)
    {
        $this->id = $id;
        $this->controls = $controls;
        $this->indicators = $indicators;
        $this->items = $items;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->addHtmlAttribute('id', $this->id);
        $this->addDataAttribute('data-ride', 'carousel');

        return view('bootstrap-blade::carousel');
    }
}
