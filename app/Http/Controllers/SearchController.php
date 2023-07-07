<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SearchController extends Controller
{
    public function index(Request $request): string
    {
        $search = $request->get('search-term');

        return $request->get('search-term');
    }
}
