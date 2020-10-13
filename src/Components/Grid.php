<?php

namespace Enigma\BootstrapBlade\Components;

class Grid extends BootstrapComponent
{
    /**
     * The grid breakpoints.
     *
     * @var array
     */
    public array $breakpoints = ['xs', 'sm', 'md', 'lg', 'xl'];

    /**
     * The grid system.
     *
     * @var string
     */
    public string $grid;

    /**
     * The grid offset.
     *
     * @var string
     */
    public string $offset;

    /**
     * Create a new component instance.
     *
     * @param string $grid
     * @param string $offset
     */
    public function __construct(string $grid = '', string $offset = '')
    {
        $this->grid = $grid;
        $this->offset = $offset;
    }

    /**
     * Parse the grid system.
     *
     * @param string $grid
     * @return array
     */
    protected function parseGrid(string $grid) : array
    {
        $grid = explode(',', $grid);

        $grid = array_reduce($grid, function ($carry, $item) {
            $entry = explode(':', $item, 2);

            if (count($entry) == 1) {
                $carry[trim($entry[0])] = null;
            } else {
                $carry[trim($entry[0])] = trim($entry[1]);
            }
            return $carry;
        }, []);

        return array_intersect_key($grid, array_flip($this->breakpoints));
    }

    /**
     * Setup class names for breakpoints defined by the grid system.
     *
     * @param string $grid
     * @param string $classPrefix
     */
    protected function setupBreakpointClasses(string $grid, string $classPrefix)
    {
        if ($grid) {
            $this->replaceClass($classPrefix, '');
        } else {
            return;
        }

        foreach ($this->parseGrid($grid) as $breakpoint => $value) {
            if ($breakpoint === 'xs') {
                if ($value) {
                    $this->addClass("{$classPrefix}-{$value}");
                } else {
                    $this->addClass("{$classPrefix}");
                }
            } else {
                if ($value) {
                    $this->addClass("{$classPrefix}-{$breakpoint}-{$value}");
                } else {
                    $this->addClass("{$classPrefix}-{$breakpoint}");
                }
            }
        }
    }

    /**
     * Setup class names for grid.
     *
     * @param string $classPrefix
     */
    protected function setupGridClasses(string $classPrefix)
    {
        $this->setupBreakpointClasses($this->grid, $classPrefix);
    }

    /**
     * Setup class names for offset.
     *
     * @param string $classPrefix
     */
    protected function setupOffsetClasses(string $classPrefix)
    {
        $this->setupBreakpointClasses($this->offset, $classPrefix);
    }
}
