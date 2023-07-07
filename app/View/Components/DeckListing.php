<?php

namespace App\View\Components;

use App\Models\Brand;
use App\Models\Deck;
use Illuminate\View\Component;

class DeckListing extends Component
{
    public $brands;

    public function render()
    {
        $brands = request()->query('brands');

        if ($brands) {
            $brandId = Brand::where('name', $brands)->first()->id;
            $decks = Deck::where('brand_id', $brandId)->get();
        }

        if (!$brands) {
            $decks = Deck::all();
        }

        return view(
            'components.deck-listing',
            [
                'decks' => $decks
            ]
        );
    }
}
