<?php

namespace App\View\Components;

use App\Models\Package;
use Illuminate\View\Component;

class PackageItem extends Component
{
    public $package;
    public $index;

    /**
     * Create a new component instance.
     *
     * @param Package $package
     * @param int $index
     */
    public function __construct(Package $package, $index = 0)
    {
        $this->package = $package;
        $this->index = $index;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.package-item');
    }
}
