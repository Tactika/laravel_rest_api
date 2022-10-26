<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use App\Models\Business;
use Livewire\Component;


class CustomerCreate extends Component
{
    public $name;
    public $type = ["I", "B"];
    public $email;
    public $address;
    public $city;
    public $state;
    public $postal_code;
    public $business_id;
    public $businesses;


    public $rules = [
        'name' => 'required|min:6',
        'type' => 'required|max:1',
        'email' => 'required|email|unique:customers,email',
        'address' => 'required|min:6',
        'city' => 'required|min:3',
        'state' => 'required|min:2',
        'postal_code' => 'required|numeric',
        'business_id' => 'required|numeric',

    ];

    public function submit()
    {
        $this->validate();

        $new_customer = Customer::create([
            'name' => $this->name,
            'type' => $this->type,
            'email' => $this->email,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'postal_code' => $this->postal_code,
            'business_id' => $this->business_id
        ]);
        $new_customer->save();

        return redirect()->to('/customers');
    }
    public function mount()
    {
        $this->businesses = Business::all();
    }

    public function render()
    {
        return view('livewire.customer-create');
    }
}
