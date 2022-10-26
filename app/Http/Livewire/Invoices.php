<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Invoice;
use App\Models\Customer;

class Invoices extends Component
{
    public $invoices;
    public $customers;

    public function mount()
    {
        $this->invoices = Invoice::all();
        $this->customers = Customer::all();
    }

    public function render()
    {
        return view('livewire.invoices');
    }
}
