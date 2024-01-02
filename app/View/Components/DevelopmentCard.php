<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DevelopmentCard extends Component
{

    public string $title;
    public string $area;
    public string $lotes;
    public string $available;

    /**
     * Create a new component instance.
     */
    public function __construct(string $title, string $area, string $lotes, string $available)
    {
        //
        $this->title = $title;
        $this->area = $area;
        $this->lotes = $lotes;
        $this->available = $available;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.development-card');
    }
}
