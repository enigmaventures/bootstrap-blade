<?php

namespace Enigma\BootstrapBlade\Components;

class ListGroupItem extends ListItem
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'list-group-item';

    /**
     * Render the list group item as link?
     *
     * @var bool
     */
    public bool $link;

    /**
     * The list group item link's href.
     *
     * @var string
     */
    public string $href;

    /**
     * Render the list group item as button?
     *
     * @var bool
     */
    public bool $button;

    /**
     * The list group item's variant.
     *
     * @var string
     */
    public string $variant;

    /**
     * Create a new component instance.
     *
     * @param bool $active
     * @param bool $disabled
     * @param bool $link
     * @param string $href
     * @param bool $button
     * @param string $variant
     */
    public function __construct(
        bool $active = false,
        bool $disabled = false,
        bool $link = false,
        string $href = '#',
        bool $button = false,
        string $variant = ''
    ) {
        parent::__construct($active, $disabled);

        $this->link = $link;
        $this->href = $href;
        $this->button = $button;
        $this->variant = $variant;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->link || $this->button) {
            $this->addClass('list-group-item-action');
        }

        if ($this->link) {
            $this->addHtmlAttribute('href', $this->href);
        }

        if ($this->button) {
            $this->addHtmlAttribute('type', 'button');
        }

        if ($this->variant) {
            $this->addClass("list-group-item-{$this->variant}");
        }

        if ($this->active) {
            $this->addClass('active');
        }

        if ($this->disabled) {
            if ($this->button) {
                $this->addHtmlAttribute('disabled', true);
            } else {
                $this->addClass('disabled');
                $this->addAriaAttribute('aria-disabled', 'true');

                if ($this->link) {
                    $this->addHtmlAttribute('tabindex', '-1');
                }
            }
        }

        return view('bootstrap-blade::list-group-item');
    }
}
