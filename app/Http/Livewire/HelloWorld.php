<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;

class HelloWorld extends Component
{

    public $customer;
    public $new_name;


    public function mount()
    {
        $first_customer = Customer::first();
        $this->customer = $first_customer;
    }

    //create a function that changes the name of the customer
    //based on the value of $new_name
    public function changeName()
    {
        $this->customer->name = $this->new_name;
        $this->customer->save();
    }




    public function render()
    {
        return view('livewire.hello-world');
    }
}
