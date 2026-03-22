<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'tenant_id',
        'name',
        'address',
        'price',
        'description',
    ];
}
