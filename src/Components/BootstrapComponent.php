<?php

namespace Enigma\BootstrapBlade\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\View\ComponentAttributeBag;

class BootstrapComponent extends Component
{
    /**
     * The component's class names.
     *
     * @var string
     */
    public string $class = '';

    /**
     * The component's HTML attributes.
     *
     * @var array
     */
    protected array $htmlAttributes = [];

    /**
     * The component's data attributes.
     *
     * @var array
     */
    protected array $dataAttributes = [];

    /**
     * The component's aria attributes.
     *
     * @var array
     */
    protected array $ariaAttributes = [];

    /**
     * Get the component's class names.
     *
     * @return string
     */
    protected function class() : string
    {
        return $this->class;
    }

    /**
     * Get the component's base name.
     *
     * @return string
     */
    protected function componentBaseName() : string
    {
        return Str::of(class_bassname($this))->kebab()->lower();
    }

    /**
     * Add the given class to the component's class names.
     *
     * @param string $class
     */
    protected function addClass(string $class)
    {
        $this->class = "{$this->class} $class";
    }

    /**
     * Replace the given class from the component's class names.
     *
     * @param string $class
     * @param string $classReplacement
     */
    protected function replaceClass(string $class, string $classReplacement)
    {
        $this->class = Str::replaceFirst($class, $classReplacement, $this->class);
    }

    /**
     * Get the component's HTML attributes.
     *
     * @return array
     */
    protected function htmlAttributes() : array
    {
        return $this->htmlAttributes;
    }

    /**
     * Add the given attribute to the component's HTML attributes.
     *
     * @param string $attribute
     * @param mixed $value
     */
    protected function addHtmlAttribute(string $attribute, $value)
    {
        $this->htmlAttributes[$attribute] = $value;
    }

    /**
    * Add multiple HTML attributes.
    *
    * @param array $attributes
    */
    protected function addHtmlAttributes(array $attributes)
    {
        foreach ($attributes as $attribute => $value) {
            $this->htmlAttributes[$attribute] = $value;
        }
    }

    /**
     * Get the component's data attributes.
     *
     * @return array
     */
    protected function dataAttributes() : array
    {
        return $this->dataAttributes;
    }

    /**
    * Add a data attribute.
    *
    * @param string $attribute
    * @param string $value
    */
    protected function addDataAttribute(string $attribute, string $value)
    {
        $this->dataAttributes[$attribute] = $value;
    }

    /**
    * Add multiple data attributes.
    *
    * @param array $attributes
    */
    protected function addDataAttributes(array $attributes)
    {
        foreach ($attributes as $attribute => $value) {
            $this->dataAttributes[$attribute] = $value;
        }
    }

    /**
     * Get the component's aria attributes.
     *
     * @return array
     */
    protected function ariaAttributes() : array
    {
        return $this->ariaAttributes;
    }

    /**
     * Add an aria attribute.
     *
     * @param string $attribute
     * @param string $value
     */
    protected function addAriaAttribute(string $attribute, string $value)
    {
        $this->ariaAttributes[$attribute] = $value;
    }

    /**
    * Add multiple aria attributes.
    *
    * @param array $attributes
    */
    protected function addAriaAttributes(array $attributes)
    {
        foreach ($attributes as $attribute => $value) {
            $this->ariaAttributes[$attribute] = $value;
        }
    }

    /**
     * Get all the component's attributes.
     *
     * @return array
     */
    public function componentAttributes() : array
    {
        return array_merge(['class' => $this->class()], $this->htmlAttributes(), $this->dataAttributes(), $this->ariaAttributes());
    }

    /**
     * Split component attributes.
     *
     * @param \Illuminate\View\ComponentAttributeBag
     * @param string $class
     * @return string
     */
    public function splitAttributes(ComponentAttributeBag $attributes, string $class = '') : string
    {
        $componentAttributesWithoutClassNames = array_merge($this->htmlAttributes(), $this->dataAttributes(), $this->ariaAttributes());

        $classNames = $attributes->only('class')->merge(['class' => $class])->merge(['class' => $this->class()]);

        $otherAttributes =  $attributes->except('class')->merge($componentAttributesWithoutClassNames);

        return "{$classNames} {$otherAttributes}";
    }

    /**
     * Create a url hash from id.
     *
     * @param string $id
     * @return string
     */
    public function hash(string $id) : string
    {
        return "#{$id}";
    }

    /**
     * Create an id from url hash.
     *
     * @param string $hash
     * @return string
     */
    public function unhash(string $hash) : string
    {
        return str_replace('#', '', $hash);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view()->first(["bootstrap-blade::{$this->componentBaseName()}", "bootstrap-blade::default"]);
    }
}
