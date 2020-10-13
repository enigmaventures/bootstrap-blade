<?php

namespace Enigma\BootstrapBlade\Components;

class DropdownButton extends Button
{
    /**
     * Should the component be rendered as split button?
     *
     * @var bool
     */
    public bool $split;

    /**
     * Create a new component instance.
     *
     * @param string $variant
     * @param string $type
     * @param bool $block
     * @param bool $outline
     * @param string $size
     * @param bool $link
     * @param string $href
     * @param bool $input
     * @param bool $label
     * @param bool $active
     * @param bool $disabled
     * @param bool $toggle
     * @param bool $split
     */
    public function __construct(
        string $variant = 'primary',
        string $type = 'button',
        bool $block = false,
        bool $outline = false,
        string $size = '',
        bool $link = false,
        string $href = '#',
        bool $input = false,
        bool $label = false,
        bool $active = false,
        bool $disabled = false,
        bool $toggle = false,
        bool $split = false
    ) {
        parent::__construct(
            $variant,
            $type,
            $block,
            $outline,
            $size,
            $link,
            $href,
            $input,
            $label,
            $active,
            $disabled,
            $toggle
        );

        $this->split = $split;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->setupComponentAttributes();

        $this->addClass('dropdown-toggle');

        $this->addDataAttribute('data-toggle', 'dropdown');

        $this->addAriaAttributes([
            'aria-haspopup' => 'true',
            'aria-expanded' => 'false'
        ]);

        if ($this->split) {
            $this->addClass('dropdown-toggle-split');
        }

        return view('bootstrap-blade::dropdown-button');
    }
}
