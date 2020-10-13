<?php

namespace Enigma\BootstrapBlade\Components;

class Form extends BootstrapComponent
{
    /**
     * The form's HTTP request method.
     *
     * @var string
     */
    public string $method;

    /**
     * The form's action attribute.
     *
     * @var string
     */
    public string $action;

    /**
     * Render the form as inline element?
     *
     * @var bool
     */
    public bool $inline;

    /**
     * Create a new component instance.
     *
     * @param string $method
     * @param string $action
     * @param bool $inline
     */
    public function __construct(string $method = 'POST', string $action = '', bool $inline = false)
    {
        $this->method = $method;
        $this->action = $action;
        $this->inline = $inline;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->addHtmlAttributes([
            'method' => $this->method,
            'action' => $this->action
        ]);

        if ($this->inline) {
            $this->addClass('form-inline');
        }

        return view('bootstrap-blade::form');
    }
}
