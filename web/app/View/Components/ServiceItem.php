<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ServiceItem extends Component
{
    public $title;
    public $desc;
    public $class;

    /**
     * Create a new component instance.
     *
     * @param string $title
     * @param string $desc
     * @param string $class
     */
    public function __construct(string $title, string $desc = '', $class = '')
    {
        $this->title = $title;
        $this->desc = $desc;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.service-item');
    }
}
