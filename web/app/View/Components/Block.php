<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Block extends Component
{
    public $class;
    public $subtitle;
    public $title;

    /**
     * Create a new component instance.
     *
     * @param string $class
     * @param string $subtitle
     * @param string $title
     */
    public function __construct(string $class = '', string $subtitle = '', string $title = '')
    {
        $this->class = $class;
        $this->subtitle = $subtitle;
        $this->title = $title;
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
