<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $brands;
    protected $queryString = ['brands'];

    public function render()
    {
        return view('livewire.search');
    }
}
