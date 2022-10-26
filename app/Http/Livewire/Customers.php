<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\Business;
use Livewire\Component;

class Customers extends Component
{
    public $customers;
    public $businesses;

    public function mount()
    {
        $this->customers = Customer::all();
        $this->businesses = Business::all();
    }


    public function render()
    {
        return view('livewire.customers');
    }
}
