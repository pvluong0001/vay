<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\View\Component;

class PostItem extends Component
{
    public $class;
    public $post;

    /**
     * Create a new component instance.
     *
     * @param string $class
     * @param Post $post
     */
    public function __construct(Post $post, string $class = '')
    {
        $this->class = $class;
        $this->post = $post;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.post-item');
    }
}
