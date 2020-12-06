<?php

namespace Enigma\BootstrapBlade\Components;

use Illuminate\Support\Str;

class FormField extends Input
{
    /**
     * The form field label.
     *
     * @var string
     */
    public string $label;

    /**
     * The form field type.
     *
     * @var string
     */
    public string $type = '';

    /**
     * The form field's container class names.
     *
     * @var string
     */
    public string $containerClass;

    /**
     * Create horizontal form with the grid?
     *
     * @var string
     */
    public string $grid;

    /**
     * The form field's label grid class.
     *
     * @var string
     */
    public string $labelGridClass = '';

    /**
     * The form field's input grid class.
     *
     * @var string
     */
    public string $inputGridClass = '';

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
        string $grid = ''
    ) {
        parent::__construct($this->type, $name, $id, $value, $index, $size, $plaintext);

        $this->label = $label;
        $this->containerClass = $containerClass;
        $this->grid = $grid;
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
        if ($this->grid) {
            $containerClass = 'form-group row';
        } else {
            $containerClass = 'form-group';
        }

        if ($this->containerClass) {
            $this->containerClass = "{$containerClass} {$this->containerClass}";
        } else {
            $this->containerClass = $containerClass;
        }
    }

    /**
     * Parse the grid for horizontal form.
     *
     * @return array
     */
    protected function parseGrid() : array
    {
        list($breakpoint, $columns) = explode(':', $this->grid, 2);

        $columns = explode(',', $columns);

        return compact('breakpoint', 'columns');
    }

    /**
     * Setup grid classes for horizontal form.
     *
     */
    protected function setupGridClasses()
    {
        if ($this->grid) {
            $grid = $this->parseGrid();
            $this->labelGridClass = "col-{$grid['breakpoint']}-{$grid['columns'][0]}";
            $this->inputGridClass = "col-{$grid['breakpoint']}-{$grid['columns'][1]}";
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

        return view()->first(["bootstrap-blade::{$this->componentBaseName()}", "bootstrap-blade::form-field"]);
    }
}
