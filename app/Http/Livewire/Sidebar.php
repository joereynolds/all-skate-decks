<?php

namespace App\Http\Livewire;

use App\Models\Brands;
use Illuminate\Http\Request;
use Livewire\Component;

class Sidebar extends Component
{
    public $selectedBrands;

    protected $queryString = ['selectedBrands'];

    public function mount()
    {
        $this->brands = Brands::all();
    }

    public function render()
    {
        return view('livewire.sidebar', ['brands' => $this->brands]);
    }

    public function select(Request $request, string $brandName)
    {
        $request->query->set('brands', $brandName);
    }
}
