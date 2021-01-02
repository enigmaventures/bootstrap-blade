<?php

namespace Enigma\BootstrapBlade\Components;

class ProgressBar extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'progress-bar';

    /**
     * The progress bar's current, min and max values.
     *
     * @var string
     */
    public string $values;

    /**
     * Apply a stripe on the progress bar?
     *
     * @var bool
     */
    public bool $striped;

    /**
     * Animate the stripes on progress bar?
     *
     * @var bool
     */
    public bool $animated;

    /**
     * Create a new component instance.
     *
     * @param string $values
     * @param bool $striped
     * @param bool $animated
     */
    public function __construct(string $values = '', bool $striped = false, bool $animated = false)
    {
        $this->values = $values;
        $this->striped = $striped;
        $this->animated = $animated;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->addAriaAttribute('role', 'progressbar');

        if ($this->values) {
            list($current, $min, $max) = explode(',', $this->values, 3);

            $this->addAriaAttributes([
                'aria-valuenow' => $current,
                'aria-valuemin' => $min,
                'aria-valuemax' => $max
            ]);
        }

        if ($this->striped) {
            $this->addClass('progress-bar-striped');
        }

        if ($this->animated) {
            $this->addClass('progress-bar-animated');
        }

        return view()->first(['bootstrap-blade::progress-bar', 'bootstrap-blade::default']);
    }
}
