<?php

namespace Enigma\BootstrapBlade\Components;

class CustomRadio extends CustomCheckbox
{
    /**
     * The custom form field type.
     *
     * @var string
     */
    public string $type = 'radio';

    /**
     * The custom form field's default container class names.
     *
     * @var string
     */
    public string $defaultContainerClass = 'custom-control custom-radio';

    /**
     * Is the custom radio field rendered as inline element?
     *
     * @var bool
     */
    public bool $inline;

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string $id
     * @param string $value
     * @param int $index
     * @param string $label
     * @param string $containerClass
     * @param bool $checked
     * @param bool $inline
     */
    public function __construct(
        string $name = '',
        string $id = '',
        string $value = '',
        int $index = 0,
        string $label = '',
        string $containerClass = '',
        bool $checked = false,
        bool $inline = false
    ) {
        parent::__construct($name, $id, $value, $index, $label, $containerClass, $checked);

        $this->inline = $inline;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->setupComponentAttributes();

        if ($this->inline) {
            $this->defaultContainerClass = "{$this->defaultContainerClass} custom-control-inline";
        }

        $this->setupContainerClass();

        $this->markAsChecked();

        return view('bootstrap-blade::custom-radio');
    }
}
