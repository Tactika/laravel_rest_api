<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Business;

class BusinessCreate extends Component
{
    public $name;
    public $address;
    public $city;
    public $state;
    public $postal_code;
    public $phone;

    public $rules = [
        'name' => 'required|min:3',
        'address' => 'required|min:6',
        'city' => 'required|min:3',
        'state' => 'required|min:2',
        'postal_code' => 'required|numeric',
        'phone' => 'required|numeric',
    ];
    public function submit()
    {
        $this->validate();

        $new_business = Business::create([
            'name' => $this->name,
            'address' => $this->address,
            'city' => $this->city,
            'state' => $this->state,
            'postal_code' => $this->postal_code,
            'phone' => $this->phone
        ]);
        $new_business->save();

        return redirect()->to('/businesses');
    }
    public function render()
    {
        return view('livewire.business-create');
    }
}
