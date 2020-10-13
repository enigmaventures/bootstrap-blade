<?php

namespace Enigma\BootstrapBlade\Components;

class CheckboxField extends FormField
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'form-check-input';

    /**
     * The form field type.
     *
     * @var string
     */
    public string $type = 'checkbox';

    /**
     * Is the form field rendered as inline element?
     *
     * @var bool
     */
    public bool $inline;

    /**
     * Is the form field marked as checked?
     *
     * @var bool
     */
    public bool $checked;

    /**
     * The checkbox field's input grid class.
     *
     * @var string
     */
    public string $inputGridClass = '';

    /**
     * The checkbox field's offset grid class.
     *
     * @var string
     */
    public string $offsetGridClass = '';

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
     * @param bool $inline
     * @param bool $checked
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
        bool $inline = false,
        bool $checked = false
    ) {
        parent::__construct($name, $id, $value, $index, $label, $size, $plaintext, $containerClass, $grid);

        $this->inline = $inline;
        $this->checked = $checked;
    }

    /**
     * Setup container class.
     *
     */
    public function setupContainerClass()
    {
        if ($this->grid) {
            $containerClass = 'form-group row';
        } elseif ($this->inline) {
            $containerClass = 'form-check form-check-inline';
        } else {
            $containerClass = 'form-check';
        }

        if ($this->containerClass) {
            $this->containerClass = "{$containerClass} {$this->containerClass}";
        } else {
            $this->containerClass = $containerClass;
        }
    }

    /**
     * Setup grid classes for horizontal form.
     *
     */
    protected function setupGridClasses()
    {
        if ($this->grid) {
            $grid = $this->parseGrid();
            $this->offsetGridClass = "offset-{$grid['breakpoint']}-{$grid['columns'][0]}";
            $this->inputGridClass = "col-{$grid['breakpoint']}-{$grid['columns'][1]}";
        }
    }

    /**
     * Handle marking of form field as checked or unchecked.
     *
     */
    protected function markAsChecked()
    {
        if ($this->isArrayInput()) {
            if (old()) {
                if (old($this->arrayInputBaseName())) {
                    $this->addHtmlAttribute('checked', in_array($this->value, old($this->arrayInputBaseName())));
                } else {
                    $this->addHtmlAttribute('checked', false);
                }
            } else {
                $this->addHtmlAttribute('checked', $this->checked);
            }
        } else {
            if (old()) {
                if (old($this->name)) {
                    $this->addHtmlAttribute('checked', true);
                } else {
                    $this->addHtmlAttribute('checked', false);
                }
            } else {
                $this->addHtmlAttribute('checked', $this->checked);
            }
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

        $this->markAsChecked();

        return view('bootstrap-blade::checkbox-field');
    }
}
