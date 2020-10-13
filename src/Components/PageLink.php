<?php

namespace Enigma\BootstrapBlade\Components;

class PageLink extends Link
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'page-link';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->addHtmlAttribute('href', $this->href);

        if ($this->disabled) {
            $this->addAriaAttribute('aria-disabled', 'true');
            $this->addHtmlAttribute('tabindex', '-1');
        }

        return view('bootstrap-blade::page-link');
    }
}
