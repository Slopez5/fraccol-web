<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $footer;
    public $tools;
    public $isBorder;
    public $icon;

    /**
     * Create a new component instance.
     */
    public function __construct($title = null, $footer = null, $tools = null, $isBorder = false, $icon = null)
    {
        $this->title = $title;
        $this->footer = $footer;
        $this->tools = $tools;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
