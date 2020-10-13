<?php

namespace Enigma\BootstrapBlade\Components;

class Button extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'btn';

    /**
     * The button variant.
     *
     * @var string
     */
    public string $variant;

    /**
     * The button type.
     *
     * @var string
     */
    public string $type;

    /**
     * Should the button be rendered as block element?
     *
     * @var bool
     */
    public bool $block;

    /**
     * Should the button be rendered as outline?
     *
     * @var bool
     */
    public bool $outline;

    /**
     * The size of the button.
     *
     * @var string
     */
    public string $size;

    /**
     * Render the button as link element?
     *
     * @var bool
     */
    public bool $link;

    /**
     * The button href (if it's a button link).
     *
     * @var string
     */
    public string $href;

    /**
     * Render the button as input element?
     *
     * @var bool
     */
    public bool $input;

    /**
     * Render the button as label element?
     *
     * @var bool
     */
    public bool $label;

    /**
     * Is the button in active state?
     *
     * @var bool
     */
    public bool $active;

    /**
     * Is the button disabled?
     *
     * @var bool
     */
    public bool $disabled;

    /**
     * Toggle a button's active state?
     *
     * @var bool
     */
    public bool $toggle;

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
        bool $toggle = false
    ) {
        $this->variant = $variant;
        $this->type = $type;
        $this->block = $block;
        $this->outline = $outline;
        $this->size = $size;
        $this->link = $link;
        $this->href = $href;
        $this->input = $input;
        $this->label = $label;
        $this->active = $active;
        $this->disabled = $disabled;
        $this->toggle = $toggle;
    }

    /**
     * Setup component attributes.
     *
     */
    protected function setupComponentAttributes()
    {
        $this->addClass("btn-{$this->variant}");

        if ($this->block) {
            $this->addClass('btn-block');
        }

        if ($this->size) {
            $this->addClass("btn-{$this->size}");
        }

        if ($this->outline) {
            $this->replaceClass("btn-{$this->variant}", "btn-outline-{$this->variant}");
        }

        if (! ($this->link || $this->label)) {
            $this->addHtmlAttribute('type', $this->type);
        } else {
            if ($this->link) {
                $this->addAriaAttribute('role', 'button');
                $this->addHtmlAttribute('href', $this->href);
            }
        }

        if ($this->active) {
            $this->addClass('active');

            if ($this->link) {
                $this->addAriaAttribute('aria-pressed', 'true');
            }
        }

        if ($this->disabled) {
            if (! $this->link) {
                $this->addHtmlAttribute('disabled', true);
            } else {
                $this->addClass('disabled');
                $this->addAriaAttribute('aria-disabled', 'true');
                $this->addHtmlAttribute('tabindex', '-1');
            }
        }

        if ($this->toggle) {
            $this->addDataAttribute('data-toggle', 'button');
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->setupComponentAttributes();

        return view('bootstrap-blade::button');
    }
}
