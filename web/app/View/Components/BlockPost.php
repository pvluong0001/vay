<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BlockPost extends Component
{
    public $posts;
    public $showMore;

    /**
     * Create a new component instance.
     *
     * @param $posts
     * @param string $showMore
     */
    public function __construct($posts, $showMore = '')
    {
        $this->posts = $posts;
        $this->showMore = $showMore;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.block-post');
    }
}
