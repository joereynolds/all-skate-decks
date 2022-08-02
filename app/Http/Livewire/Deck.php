<?php

namespace App\Http\Livewire;

use App\Models\Deck as DeckModel;
use Livewire\Component;

class Deck extends Component
{
    public DeckModel $deck;
    public function render()
    {
        return view('livewire.deck');
    }
}
