<?php

namespace Enigma\BootstrapBlade\Components;

class Badge extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'badge';

    /**
     * The badge variant.
     *
     * @var string
     */
    public string $variant;

    /**
     * Is the badge to be rendered as rounded (pilled)?
     *
     * @var bool
     */
    public bool $pill;

    /**
     * Render the badge as link element?
     *
     * @var bool
     */
    public bool $link;

    /**
     * The badge href (if it's a badge link).
     *
     * @var string
     */
    public string $href;

    /**
     * Create a new component instance.
     *
     * @param string $variant
     * @param bool $pill
     * @param bool $link
     * @param string $href
     */
    public function __construct(string $variant = 'primary', bool $pill = false, bool $link = false, string $href = '#')
    {
        $this->variant = $variant;
        $this->pill = $pill;
        $this->link = $link;
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->addClass("badge-{$this->variant}");

        if ($this->pill) {
            $this->addClass('badge-pill');
        }

        if ($this->link) {
            $this->addHtmlAttribute('href', $this->href);
        }

        return view('bootstrap-blade::badge');
    }
}
