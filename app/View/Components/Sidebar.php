<?php

namespace App\View\Components;

use Illuminate\View\Component;

use App\Models\Brand;

class Sidebar extends Component
{
    public function render()
    {
        return view(
            'components.sidebar',
            [
                'firstFewBrands' => Brand::take(7)->get(),
                'remainingBrands' => Brand::skip(7)->take(4000)->get(),
            ]
        );
    }
}
