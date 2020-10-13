<?php

namespace Enigma\BootstrapBlade\Components;

class DropdownItem extends Link
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'dropdown-item';

    /**
     * Render the dropdown item as a button?
     *
     * @var bool
     */
    public bool $button;

    /**
     * Create a new component instance.
     *
     * @param string $href
     * @param string $text
     * @param bool $active
     * @param bool $disabled
     * @param bool $button
     */
    public function __construct(string $href = '#', string $text = '', bool $active = false, bool $disabled = false, bool $button = false)
    {
        parent::__construct($href, $text, $active, $disabled);

        $this->button = $button;
    }

    /**
    * Get the view / contents that represent the component.
    *
    * @return \Illuminate\View\View|\Closure|string
    */
    public function render()
    {
        if ($this->button) {
            $this->addHtmlAttribute('type', 'button');
        } else {
            parent::render();
        }

        return view('bootstrap-blade::dropdown-item');
    }
}
