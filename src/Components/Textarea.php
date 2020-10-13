<?php

namespace Enigma\BootstrapBlade\Components;

use Illuminate\Support\Str;

class Textarea extends Input
{
    /**
     * The input type.
     *
     * @var string
     */
    public string $type = '';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->setupComponentAttributes();

        return view('bootstrap-blade::textarea');
    }
}
