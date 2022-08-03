<?php

namespace App\Http\Livewire;

use App\Models\Brands;
use Livewire\Component;

class Sidebar extends Component
{
    public function mount()
    {
        $this->brands = Brands::all();
    }

    public function render()
    {
        return view('livewire.sidebar', ['brands' => $this->brands]);
    }
}
