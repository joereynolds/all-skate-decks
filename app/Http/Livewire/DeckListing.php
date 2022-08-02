<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;

class DeckListing extends Component
{
    public Collection $decks;
    public function render()
    {
        return view('livewire.deck-listing');
    }
}
