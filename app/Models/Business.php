<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'city',
        'state',
        'postal_code',
        'phone',
    ];

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
