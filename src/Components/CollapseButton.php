<?php

namespace Enigma\BootstrapBlade\Components;

class CollapseButton extends Button
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->setupComponentAttributes();

        $this->addDataAttribute('data-toggle', 'collapse');

        if (! $this->link) {
            $this->addDataAttribute('data-target', $this->href);
        }

        $this->addAriaAttributes([
            'aria-expanded' => 'false',
            'aria-controls' => $this->unhash($this->href)
        ]);

        return view('bootstrap-blade::collapse-button');
    }
}
