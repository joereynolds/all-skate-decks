<?php

namespace App\Http\Livewire\Form;

use App\Models\Brand;
use Livewire\Component;

class AddADeck extends Component
{
    public $name;

    public function mount()
    {
        $this->brands = Brand::all();
    }
    public function render()
    {
        return view('livewire.form.add-a-deck');
    }
}
