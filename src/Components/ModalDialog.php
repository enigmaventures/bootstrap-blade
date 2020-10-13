<?php

namespace Enigma\BootstrapBlade\Components;

class ModalDialog extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'modal-dialog';

    /**
     * Make the modal dialog scrollable?
     *
     * @var bool
     */
    public bool $scrollable;

    /**
     * Center the modal dialog vertically?
     *
     * @var bool
     */
    public bool $centered;

    /**
     * The size of the modal dialog.
     *
     * @var string
     */
    public string $size;

    /**
     * Create a new component instance.
     *
     * @param bool $scrollable
     * @param bool $centered
     * @param string $size
     */
    public function __construct(bool $scrollable = false, bool $centered = false, string $size = '')
    {
        $this->scrollable = $scrollable;
        $this->centered = $centered;
        $this->size = $size;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->scrollable) {
            $this->addClass('modal-dialog-scrollable');
        }

        if ($this->centered) {
            $this->addClass('modal-dialog-centered');
        }

        if ($this->size) {
            $this->addClass("modal-{$this->size}");
        }

        return view('bootstrap-blade::modal-dialog');
    }
}
