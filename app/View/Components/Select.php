<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Select extends Component
{
    public $title, $name;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $name)
    {
        $this->name = $name;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.select');
    }
}
