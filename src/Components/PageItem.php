<?php

namespace Enigma\BootstrapBlade\Components;

class PageItem extends ListItem
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'page-item';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->active) {
            $this->addAriaAttribute('aria-current', 'page');
        }

        parent::render();
    }
}
