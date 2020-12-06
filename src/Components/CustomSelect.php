<?php

namespace Enigma\BootstrapBlade\Components;

use Illuminate\Support\Str;

class CustomSelect extends CustomInput
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'custom-select';

    /**
     * The input type.
     *
     * @var string
     */
    public string $type = '';

    /**
     * The size of the custom select.
     *
     * @var string
     */
    public string $size;

    /**
     * The available options for the custom select.
     *
     * @var array
     */
    public array $options;

    /**
     * The selected option for the custom select.
     *
     * @var mixed
     */
    public $selected;

    /**
    * Create a new component instance.
    *
    * @param string $name
    * @param string $id
    * @param string $value
    * @param int $index
    * @param string $size
    * @param array $options
    * @param mixed $selected
    */
    public function __construct(
        string $name = '',
        string $id = '',
        string $value = '',
        int $index = 0,
        string $size = '',
        array $options = [],
        $selected = ''
    ) {
        parent::__construct($this->type, $name, $id, $value, $index);

        $this->size = $size;
        $this->options = $options;
        $this->selected = $selected;
    }

    /**
     * Is the option field to be marked as selected?
     *
     * @param string $value
     * @return bool
     */
    public function isSelected(string $value) : bool
    {
        if ($this->isArrayInput()) {
            return in_array($value, old($this->arrayInputBaseName(), $this->selected));
        } else {
            return ($value == old($this->name, $this->selected));
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

        if ($this->size) {
            $this->addClass("custom-select-{$this->size}");
        }

        if ($this->isArrayInput()) {
            $this->addHtmlAttribute('multiple', true);

            if (! $this->selected) {
                $this->selected = [];
            }
        }

        return view()->first(['bootstrap-blade::custom-select', 'bootstrap-blade::select']);
    }
}
