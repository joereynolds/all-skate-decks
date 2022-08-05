<?php

namespace App\Http\Livewire;

use App\Models\Brands;
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

        $submittedBrand = new Brands();
        $submittedBrand->name = $this->brand;
        $submittedBrand->save();
    }

    public function render(): View
    {
        return view('livewire.add-a-brand-form');
    }
}
