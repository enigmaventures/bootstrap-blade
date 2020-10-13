<?php

namespace Enigma\BootstrapBlade\Components;

class ListGroup extends ListElement
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'list-group';

    /**
     * Render the list group as a block element?
     *
     * @var bool
     */
    public bool $block;

    /**
     * Remove borders and rounded corners?
     *
     * @var bool
     */
    public bool $flush;

    /**
     * Render the list group horizontally?
     *
     * @var mixed
     */
    public $horizontal;

    /**
     * Create a new component instance.
     *
     * @param bool $ordered
     * @param bool $block
     * @param bool $flush
     * @param mixed $horizontal
     */
    public function __construct(bool $ordered = false, bool $block = false, bool $flush = false, $horizontal = false)
    {
        parent::__construct($ordered);

        $this->block = $block;
        $this->flush = $flush;
        $this->horizontal = $horizontal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->flush) {
            $this->addClass('list-group-flush');
        }

        if ($this->horizontal) {
            if (is_bool($this->horizontal)) {
                $this->addClass('list-group-horizontal');
            }

            if (is_string($this->horizontal)) {
                $this->addClass("list-group-horizontal-{$this->horizontal}");
            }
        }

        return view('bootstrap-blade::list-group');
    }
}
