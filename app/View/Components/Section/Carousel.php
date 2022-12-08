<?php

namespace App\View\Components\Section;

use Illuminate\View\Component;

class Carousel extends Component
{
    public $title = '';
    public $banner = '';
    public $class = '';
    public $items = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($items, $title, $banner=false, $class=false)
    {
        $this->items = is_array($items)?$items:[];
        $this->title = $title;
        $this->banner = $banner;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.section.carousel');
    }
}
