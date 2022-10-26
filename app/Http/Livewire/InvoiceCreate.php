<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Invoice;
use App\Models\Customer;

class InvoiceCreate extends Component
{

    public $customer_id;
    public $amount;
    public $status = ['B', 'P', 'V'];
    public $billed_date;
    public $paid_date;
    public $customers;

    public $rules = [
        'customer_id' => 'required|numeric',
        'amount' => 'required|numeric',
        'status' => 'required|max:1',
        'billed_date' => 'required|date',
        'paid_date' => 'nullable|date',
    ];

    public function mount()
    {
        $this->customers = Customer::all();
    }

    public function submit()
    {
        $this->validate();

        $new_invoice = Invoice::create([
            'customer_id' => $this->customer_id,
            'amount' => $this->amount,
            'status' => $this->status,
            'billed_date' => $this->billed_date,
            'paid_date' => $this->paid_date,
        ]);
        $new_invoice->save();

        return redirect()->to('/invoices');
    }

    public function render()
    {
        return view('livewire.invoice-create');
    }
}
