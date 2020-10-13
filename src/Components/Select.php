<?php

namespace Enigma\BootstrapBlade\Components;

class Select extends Input
{
    /**
     * The input type.
     *
     * @var string
     */
    public string $type = '';

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
     * @param string $size
     * @param bool $plaintext
     * @param array $options
     * @param mixed $selected
     */
    public function __construct(
        string $name = '',
        string $id = '',
        string $value = '',
        int $index = 0,
        string $size = '',
        bool $plaintext = false,
        array $options = [],
        $selected = ''
    ) {
        parent::__construct($this->type, $name, $id, $value, $index, $size, $plaintext);

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

        if ($this->isArrayInput()) {
            $this->addHtmlAttribute('multiple', true);

            if (! $this->selected) {
                $this->selected = [];
            }
        }

        return view('bootstrap-blade::select');
    }
}
