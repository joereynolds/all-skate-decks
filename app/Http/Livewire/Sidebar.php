<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use Livewire\Component;

class Sidebar extends Component
{
    public $brand;

    public function mount()
    {
        $this->firstFewBrands = Brand::take(7)->get();
        $this->remainingBrands = Brand::skip(7)->take(4000)->get();
    }

    public function render()
    {
        return view('livewire.sidebar');
    }
}
