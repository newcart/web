<?php

namespace App\View\Components\Product;

use Illuminate\View\Component;

class CategoryItem extends Component
{
    public $item = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($item)
    {
        $this->item = is_array($item)?$item:[];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product.category-item');
    }
}
