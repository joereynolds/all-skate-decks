<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;

class Sidebar extends Component
{
    public Collection $brands;
    public function render()
    {
        return view('livewire.sidebar');
    }
}
