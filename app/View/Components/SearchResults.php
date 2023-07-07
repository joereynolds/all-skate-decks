<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class SearchResults extends Component
{
    public function __construct(
        public array $matches = [],
        public string $searchTerm
    ) {
    }

    public function render(): View
    {
        return view('components.search-results');
    }
}
