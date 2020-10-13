<?php

namespace Enigma\BootstrapBlade\Components;

class PageItemLink extends Link
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'page-link';

    /**
     * The container's class names.
     *
     * @var string
     */
    public string $containerClass = 'page-item';

    /**
     * Add the given class to the container's class names.
     *
     * @param string $class
     */
    protected function addContainerClass(string $class)
    {
        $this->containerClass = "{$this->containerClass} $class";
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
            $this->addContainerClass('active');
        }

        if ($this->disabled) {
            $this->addContainerClass('disabled');
            $this->addAriaAttribute('aria-disabled', 'true');
            $this->addHtmlAttribute('tabindex', '-1');
        }

        return view('bootstrap-blade::page-item-link');
    }
}
