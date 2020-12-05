<?php

namespace Enigma\BootstrapBlade\Components;

class Link extends BootstrapComponent
{
    /**
     * The link component's href.
     *
     * @var string
     */
    public string $href;

    /**
     * The link's text content.
     *
     * @var string
     */
    public string $text;

    /**
     * Is the link in active state?
     *
     * @var bool
     */
    public bool $active;

    /**
     * Is the link disabled?
     *
     * @var bool
     */
    public bool $disabled;

    /**
     * Create a new component instance.
     *
     * @param string $href
     * @param string $text
     * @param bool $active
     * @param bool $disabled
     */
    public function __construct(string $href = '#', string $text = '', bool $active = false, bool $disabled = false)
    {
        $this->href = $href;
        $this->text = $text;
        $this->active = $active;
        $this->disabled = $disabled;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->addHtmlAttribute('href', $this->href);

        if ($this->active) {
            $this->addClass('active');
        }

        if ($this->disabled) {
            $this->addClass('disabled');
            $this->addAriaAttribute('aria-disabled', 'true');
            $this->addHtmlAttribute('tabindex', '-1');
        }

        return view()->first(["bootstrap-blade::{$this->componentBaseName()}", "bootstrap-blade::link"]);
    }
}
