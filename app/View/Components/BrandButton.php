<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BrandButton extends Component
{
    public function __construct(
        public string $name,
        public string $route,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.brand-button');
    }
}
