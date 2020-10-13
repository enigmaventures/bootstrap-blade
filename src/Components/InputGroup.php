<?php

namespace Enigma\BootstrapBlade\Components;

class InputGroup extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'input-group';

    /**
     * The size of the input group.
     *
     * @var string
     */
    public string $size;

    /**
     * Create a new component instance.
     *
     * @param string $size
     */
    public function __construct(string $size = '')
    {
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
            $this->addClass("input-group-{$this->size}");
        }

        return view('bootstrap-blade::input-group');
    }
}
