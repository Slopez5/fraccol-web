<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LotTypeTable extends Component
{
    public $loteTypes;
    /**
     * Create a new component instance.
     */
    public function __construct($loteTypes)
    {
        //
        $this->loteTypes = $loteTypes;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.lot-type-table');
    }
}
