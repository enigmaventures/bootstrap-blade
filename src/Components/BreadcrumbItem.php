<?php

namespace Enigma\BootstrapBlade\Components;

class BreadcrumbItem extends ListItem
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'breadcrumb-item';

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
