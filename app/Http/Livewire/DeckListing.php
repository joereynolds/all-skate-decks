<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Deck;
use Illuminate\Http\Request;
use Livewire\Component;

class DeckListing extends Component
{
    public $brands;

    public function render(Request $request)
    {
        $brands = $request->query('brands');

        if ($brands) {
            $brandId = Brand::where('name', $brands)->first()->id;
            $decks = Deck::where('brand_id', $brandId)->get();
        }

        if (!$brands) {
            $decks = Deck::all();
        }

        return view(
            'livewire.deck-listing',
            [
                'decks' => $decks
            ]
        );
    }
}
