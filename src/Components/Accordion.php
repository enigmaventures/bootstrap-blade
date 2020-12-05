<?php

namespace Enigma\BootstrapBlade\Components;

class Accordion extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'accordion';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->addHtmlAttribute('id', $this->id);

        return view('bootstrap-blade::accordion');
    }
}
