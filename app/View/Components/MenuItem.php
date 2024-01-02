<?php

namespace App\View\Components;

use App\Classes\MenuType;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MenuItem extends Component
{
    public string $title;
    public string $type;
    public string $badge;
    public string $icon;
    public string $route;
    public bool $isTree = false;
    public bool $isBadge = false;

    /**
     * Create a new component instance.
     */
    public function __construct(string $title, string $type = MenuType::default, $badge = 0,string $icon = "far fa-circle", string $route = "#")
    {
        $this->title = $title;
        $this->type = $type;
        $this->badge = $badge;
        $this->icon = $icon;
        $this->route = $route;
        $this->isTree = $type == MenuType::tree;
        $this->isBadge = $badge > 0;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.menu-item');
    }
}
