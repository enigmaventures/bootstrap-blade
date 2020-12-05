<?php

namespace Enigma\BootstrapBlade\Components;

class CardHeader extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'card-header';

    /**
     * The card header's text content.
     *
     * @var string
     */
    public string $text;

    /**
     * Render the header as a heading element?
     *
     * @var string
     */
    public string $heading;

    /**
     * Create a new component instance.
     *
     * @param string $text
     * @param string $heading
     */
    public function __construct(string $text = '', string $heading = '')
    {
        $this->text = $text;
        $this->heading = $heading;
    }
}
