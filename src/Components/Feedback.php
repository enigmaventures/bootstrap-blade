<?php

namespace Enigma\BootstrapBlade\Components;

class Feedback extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'valid-feedback';

    /**
     * Is the feedback invalid?
     *
     * @var bool
     */
    public bool $invalid;

    /**
     * Render the feedback as tooltip?
     *
     * @var bool
     */
    public bool $tooltip;

    /**
     * Create a new component instance.
     *
     * @param bool $invalid
     * @param bool $tooltip
     */
    public function __construct(bool $invalid = false, bool $tooltip = false)
    {
        $this->invalid = $invalid;
        $this->tooltip = $tooltip;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->tooltip) {
            if ($this->invalid) {
                $this->replaceClass('valid-feedback', 'invalid-tooltip');
            } else {
                $this->replaceClass('valid-feedback', 'valid-tooltip');
            }
        } else {
            if ($this->invalid) {
                $this->replaceClass('valid-feedback', 'invalid-feedback');
            }
        }

        return view('bootstrap-blade::feedback');
    }
}
