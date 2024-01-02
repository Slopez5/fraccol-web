<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MetadataTable extends Component
{

    public $metadatas;
    /**
     * Create a new component instance.
     */
    public function __construct($metadatas)
    {
        //
        $this->metadatas = $metadatas;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.metadata-table');
    }
}
