<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Business;

class Businesses extends Component
{
    public $businesses;

    public function mount()
    {
        $this->businesses = Business::all();
    }
    public function render()
    {
        return view('livewire.businesses');
    }
}
