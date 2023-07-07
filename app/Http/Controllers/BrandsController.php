<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Deck;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index(string $brand = ''): View
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

    public function store(Request $request): View
    {
        $submittedBrand = new Brand();
        $submittedBrand->name = $request->post('brand');
        $submittedBrand->save();

        return view(
            'components.brand-button',
            [
                'route' => $request->post('brand'),
                'name' => $request->post('brand'),
            ]
        );
    }
}
