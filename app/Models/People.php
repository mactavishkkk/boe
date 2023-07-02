<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $table = 'people';

    protected $fillable = [
        'marital_status_id',
        'address_id',
        'name',
        'gender',
        'email',
        'phone',
        'date_birth'
    ];

    public function address()
    {
        return $this->hasOne(Address::class, 'id', 'address_id');
    }

    public function maritalStatus()
    {
        return $this->hasOne(MaritalStatus::class, 'id', 'marital_status_id');
    }
}
