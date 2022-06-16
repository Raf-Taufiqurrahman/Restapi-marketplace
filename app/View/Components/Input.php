<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $title, $type, $name, $placeholder, $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $type, $name, $placeholder, $value)
    {
        $this->title = $title;
        $this->type = $type;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
