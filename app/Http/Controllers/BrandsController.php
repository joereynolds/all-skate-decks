<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Deck;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $brand = '')
    {
        if (!$brand) {
            $decks = Deck::all();
        }

        if ($brand) {
            $brandId = Brand::where('name', $brand)->first()->id;
            $decks = Deck::where('brand_id', $brandId)->get();
        }

        return view(
            'components.deck-listing',
            [
                'decks' => $decks,
                'context' => ['brand' => $brand]
            ]
        );
    }

    public function store(Request $request)
    {
        $submittedBrand = new Brand();
        $submittedBrand->name = $request->post('brand');
        $submittedBrand->save();
    }
}
