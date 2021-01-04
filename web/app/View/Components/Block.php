<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Block extends Component
{
    public $class;
    public $subtitle;

    /**
     * Create a new component instance.
     *
     * @param string $class
     * @param string $subtitle
     */
    public function __construct(string $class = '', string $subtitle = '')
    {
        $this->class = $class;
        $this->subtitle = $subtitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.block');
    }
}
