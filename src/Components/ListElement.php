<?php

namespace Enigma\BootstrapBlade\Components;

class ListElement extends BootstrapComponent
{
    /**
     * NOTE:
     * Due to List being a reserved word in PHP and therefore, can't be used as class name,
     * ListElement was chosen as the class name instead.
     */

    /**
     * Is the list ordered?
     *
     * @var bool
     */
    public bool $ordered;

    /**
     * Create a new component instance.
     *
     * @param bool $ordered
     */
    public function __construct(bool $ordered = false)
    {
        $this->ordered = $ordered;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view()->first(["bootstrap-blade::{$this->componentBaseName()}", 'bootstrap-blade::list']);
    }
}
