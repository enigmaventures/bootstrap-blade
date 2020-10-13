<?php

namespace Enigma\BootstrapBlade\Components;

class FormText extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'text-muted';

    /**
     * Is the form text rendered as inline element?
     *
     * @var bool
     */
    public bool $inline;

    /**
     * Create a new component instance.
     *
     * @param bool $inline
     */
    public function __construct(bool $inline = false)
    {
        $this->inline = $inline;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        if (! $this->inline) {
            $this->addClass('form-text');
        }

        return view('bootstrap-blade::form-text');
    }
}
