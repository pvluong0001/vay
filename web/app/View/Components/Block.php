<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Block extends Component
{
    public $class;
    public $subtitle;
    public $title;
    public $hiddenSubtitle;

    /**
     * Create a new component instance.
     *
     * @param string $class
     * @param string $subtitle
     * @param string $title
     * @param bool $hiddenSubtitle
     */
    public function __construct(string $class = '', string $subtitle = '', string $title = '', $hiddenSubtitle = false)
    {
        $this->class = $class;
        $this->subtitle = $subtitle;
        $this->title = $title;
        $this->hiddenSubtitle = $hiddenSubtitle;
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
