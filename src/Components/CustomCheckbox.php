<?php

namespace Enigma\BootstrapBlade\Components;

class CustomCheckbox extends CustomForm
{
    /**
     * The custom form field type.
     *
     * @var string
     */
    public string $type = 'checkbox';

    /**
     * Is the custom checkbox marked as checked?
     *
     * @var bool
     */
    public bool $checked;

    /**
     * The custom form field's default container class names.
     *
     * @var string
     */
    public string $defaultContainerClass = 'custom-control custom-checkbox';

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
     */
    public function __construct(
        string $name = '',
        string $id = '',
        string $value = '',
        int $index = 0,
        string $label = '',
        string $containerClass = '',
        bool $checked = false
    ) {
        parent::__construct($name, $id, $value, $index, $label, $containerClass);

        $this->checked = $checked;
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

        $this->markAsChecked();

        return view("bootstrap-blade::custom-checkbox");
    }
}
