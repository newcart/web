<?php

namespace App\View\Components\Section;

use Illuminate\View\Component;

class Image extends Component
{
    public $images;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($images)
    {
        $this->images = is_array($images)?$images:[$images];
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.section.image');
    }
}
