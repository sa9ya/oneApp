<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class JoinUs extends Component
{
	public string $title;
    /**
     * Create a new component instance.
     */
    public function __construct(string $title = 'Join Us')
    {
		$this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.join-us');
    }
}
