<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavigationMenu extends Component
{
	public array $menu = [];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
	    $this->menu = [
		    ['route' => 'home', 'label' => __('main.main')],
		    ['route' => 'about', 'label' => 'About'],
		    ['route' => 'services', 'label' => 'Services'],
		    ['route' => 'contacts', 'label' => 'Contact'],
	    ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navigation-menu');
    }
}
