<?php

namespace Enigma\BootstrapBlade\Components;

class CustomFile extends CustomForm
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = 'custom-file-input';

    /**
     * The custom form field type.
     *
     * @var string
     */
    public string $type = 'file';

    /**
     * The custom form field's default container class names.
     *
     * @var string
     */
    public string $defaultContainerClass = 'custom-file';

    /**
     * The custom form field's label class names.
     *
     * @var string
     */
    public string $labelClass = 'custom-file-label';

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        parent::render();

        return view('bootstrap-blade::custom-file');
    }
}
