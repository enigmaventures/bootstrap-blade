<?php

namespace Enigma\BootstrapBlade\Components;

use Illuminate\Support\Str;

class CustomForm extends CustomInput
{
    /**
     * The custom form label.
     *
     * @var string
     */
    public string $label;

    /**
     * The custom form field type.
     *
     * @var string
     */
    public string $type = '';

    /**
     * The custom form field's container class names.
     *
     * @var string
     */
    public string $containerClass;

    /**
     * The custom form field's default container class names.
     *
     * @var string
     */
    public string $defaultContainerClass = '';

    /**
     * The custom form field's label class names.
     *
     * @var string
     */
    public string $labelClass = 'custom-control-label';

    /**
     * Create a new component instance.
     *
     * @param string $name
     * @param string $id
     * @param string $value
     * @param int $index
     * @param string $label
     * @param string $containerClass
     */
    public function __construct(
        string $name = '',
        string $id = '',
        string $value = '',
        int $index = 0,
        string $label = '',
        string $containerClass = ''
    ) {
        parent::__construct($this->type, $name, $id, $value, $index);

        $this->label = $label;
        $this->containerClass = $containerClass;
    }

    /**
     * Setup component attributes.
     *
     */
    protected function setupComponentAttributes()
    {
        parent::setupComponentAttributes();

        if ($this->name && ! $this->label) {
            if ($this->isArrayInput()) {
                $this->label = Str::of($this->arrayInputBaseName())->replace('_', ' ')->title();
            } else {
                $this->label = Str::of($this->name)->replace('_', ' ')->title();
            }
        }
    }

    /**
     * Setup container class.
     *
     */
    protected function setupContainerClass()
    {
        if ($this->containerClass) {
            $this->containerClass = "{$this->defaultContainerClass} {$this->containerClass}";
        } else {
            $this->containerClass = $this->defaultContainerClass;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->setupComponentAttributes();

        $this->setupContainerClass();
    }
}
