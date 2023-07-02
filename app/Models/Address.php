<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'address';

    protected $fillable = [
        'state',
        'county',
        'cep',
        'street',
        'number',
        'district',
        'complement'
    ];

    public function people()
    {
        return $this->belongsTo(People::class, 'address_id', 'id');
    }
}
