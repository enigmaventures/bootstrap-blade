<?php

namespace Enigma\BootstrapBlade\Components;

class InputGroupAddon extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'input-group-text';

    /**
     * The input group addon's text.
     *
     * @var string
     */
    public string $text;

    /**
     * Append the input group addon instead of preprending?
     *
     * @var bool
     */
    public bool $append;

    /**
     * Create a new component instance.
     *
     * @param string $text
     * @param bool $append
     */
    public function __construct(string $text = '', bool $append = false)
    {
        $this->text = $text;
        $this->append = $append;
    }

    /**
     * Get container class.
     *
     * @return string
     */
    public function containerClass() : string
    {
        if ($this->append) {
            return 'input-group-append';
        } else {
            return 'input-group-prepend';
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-blade::input-group-addon');
    }
}
