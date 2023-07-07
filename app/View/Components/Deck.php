<?php

namespace App\View\Components;

use App\Models\Deck as DeckModel;
use Illuminate\View\Component;

class Deck extends Component
{
    public function __construct(
        public DeckModel $deck,
        public string $imageUrl = ''
    ) {
    }

    public function render()
    {
        return view('components.deck');
    }
}
