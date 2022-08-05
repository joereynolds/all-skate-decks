<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class AddABrandForm extends Component
{
    public $brand;

    protected $rules = [
        'brand' => 'required|unique:brands,name|min:2',
    ];

    public function submit(): void
    {
        $this->validate();

        $submittedBrand = new Brand();
        $submittedBrand->name = $this->brand;
        $submittedBrand->save();

        session()->flash('message', "Brand '$this->brand' saved successfully.");
    }

    public function render(): View
    {
        return view('livewire.add-a-brand-form');
    }
}
