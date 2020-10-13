<?php

namespace Enigma\BootstrapBlade\Components;

class CustomLabel extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'custom-control-label';

    /**
     * Is the custom label for file input?
     *
     * @var bool
     */
    public bool $file;

    /**
     * Create a new component instance.
     *
     * @param bool $file
     */
    public function __construct(bool $file = false)
    {
        $this->file = $file;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->file) {
            $this->replaceClass('custom-control-label', 'custom-file-label');
        }

        return view('bootstrap-blade::custom-label');
    }
}
