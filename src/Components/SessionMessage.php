<?php

namespace Enigma\BootstrapBlade\Components;

class SessionMessage extends BootstrapComponent
{
    /**
     * The session message's type.
     *
     * @var string
     */
    public string $type;

    /**
     * The session message's text.
     *
     * @var string
     */
    public string $text;

    /**
     * Create a new component instance.
     *
     * @param string $type
     * @param string $text
     */
    public function __construct(string $type = 'status', string $text = '')
    {
        $this->type = $type;
        $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-blade::session-message');
    }
}
