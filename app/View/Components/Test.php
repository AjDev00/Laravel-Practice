<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Test extends Component
{
    /**
     * Create a new component instance.
     */
    public $label, $placeholder;

     public function __construct($label, $placeholder)
    {
        $this->label = $label;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.test');
    }
}
