<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view(
            'welcome',
            [
                'brands' => Brands::all()
            ]
        );
    }
}
