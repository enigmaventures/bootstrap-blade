<?php

namespace Enigma\BootstrapBlade\Components;

use Illuminate\Support\Str;

class CustomInput extends BootstrapComponent
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'custom-control-input';

    /**
     * The input type.
     *
     * @var string
     */
    public string $type;

    /**
     * The input name.
     *
     * @var string
     */
    public string $name;

    /**
     * The input id.
     *
     * @var string
     */
    public string $id;

    /**
     * The input value.
     *
     * @var string
     */
    public string $value;

    /**
     * The input's index if part of array inputs.
     *
     * @var int
     */
    public int $index;

    /**
     * Create a new component instance.
     *
     * @param string $type
     * @param string $name
     * @param string $id
     * @param string $value
     * @param int $index
     */
    public function __construct(string $type = '', string $name = '', string $id = '', string $value = '', int $index = 0)
    {
        $this->type = $type;
        $this->name = $name;
        $this->id = $id;
        $this->value = $value;
        $this->index = $index;
    }

    /**
     * Setup component attributes.
     *
     */
    protected function setupComponentAttributes()
    {
        if ($this->type) {
            $this->addHtmlAttribute('type', $this->type);
        }

        if ($this->id) {
            $this->addHtmlAttribute('id', $this->id);
        }

        if ($this->name) {
            if (! $this->id) {
                $id = Str::of($this->name)->replace('_', ' ')->kebab();
                $this->addHtmlAttribute('id', $id);
                $this->id = $id;
            }

            $this->addHtmlAttribute('name', $this->name);
        }

        if ($this->type && $this->type !== 'file') {
            if ($this->isArrayInput()) {
                $this->addHtmlAttribute('value', old("{$this->arrayInputBaseName()}.{$this->index}", $this->value));
            } else {
                $this->addHtmlAttribute('value', old($this->name, $this->value));
            }
        }
    }

    /**
     * Does the input accepts multiple values for submission?
     *
     * @return bool
     */
    public function isArrayInput() : bool
    {
        return Str::of($this->name)->contains('[]');
    }

    /**
     * Get array input's base name.
     *
     * @return string
     */
    public function arrayInputBaseName() : string
    {
        return Str::of($this->name)->replaceFirst('[]', '');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        $this->setupComponentAttributes();

        if ($this->type === 'file') {
            $this->replaceClass('custom-control-input', 'custom-file-input');
        }

        if ($this->type === 'range') {
            $this->replaceClass('custom-control-input', 'custom-range');
        }

        return view()->first(["bootstrap-blade::custom-input", "bootstrap-blade::input"]);
    }
}
