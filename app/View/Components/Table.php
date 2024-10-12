<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    public $dataCell = [];
    public $headers = [];
    public $action;

    /**
     * Create a new component instance.
     */
    public function __construct($headers, $dataCell, $action = null)
    {
        $this->headers = $headers;
        $this->dataCell = $dataCell;
        $this->action = $action;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table');
    }
}
