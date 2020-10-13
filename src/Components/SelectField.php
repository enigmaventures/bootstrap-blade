<?php

namespace Enigma\BootstrapBlade\Components;

class SelectField extends FormField
{
    /**
     * The available options for the select element.
     *
     * @var array
     */
    public array $options;

    /**
     * The selected option for the select element.
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
     * @param string $label
     * @param string $size
     * @param bool $plaintext
     * @param string $containerClass
     * @param string $grid
     * @param array $options
     * @param $selected
     */
    public function __construct(
        string $name = '',
        string $id = '',
        string $value = '',
        int $index = 0,
        string $label = '',
        string $size = '',
        bool $plaintext = false,
        string $containerClass = '',
        string $grid = '',
        array $options = [],
        $selected = ''
    ) {
        parent::__construct($name, $id, $value, $index, $label, $size, $plaintext, $containerClass, $grid);

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

        $this->setupContainerClass();

        $this->setupGridClasses();

        if ($this->isArrayInput()) {
            $this->addHtmlAttribute('multiple', true);

            if (! $this->selected) {
                $this->selected = [];
            }
        }

        return view('bootstrap-blade::select-field');
    }
}
