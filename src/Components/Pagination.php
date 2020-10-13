<?php

namespace Enigma\BootstrapBlade\Components;

class Pagination extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'pagination';

    /**
     * The wrapping nav's aria-label.
     *
     * @var string
     */
    public string $ariaLabel;

    /**
     * The size of the pagination.
     *
     * @var string
     */
    public string $size;

    /**
     * Create a new component instance.
     *
     * @param string $ariaLabel
     * @param string $size
     */
    public function __construct(string $ariaLabel = 'Page navigation', string $size = '')
    {
        $this->ariaLabel = $ariaLabel;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->size) {
            $this->addClass("pagination-{$this->size}");
        }

        return view('bootstrap-blade::pagination');
    }
}
