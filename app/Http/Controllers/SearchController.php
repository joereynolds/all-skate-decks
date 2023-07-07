<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SearchController extends Controller
{
    public function index(Request $request): View
    {
        $search = $request->get('search-term');

        $brands = Brand::where('name', 'LIKE', "%$search%")->get();

        return view('components.search-results',
            [
                'searchTerm' => $search,
                'matches' => [
                    'brands' => $brands
                ]
            ]
        );
    }
}
