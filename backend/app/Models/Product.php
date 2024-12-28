<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'caption',
        'price',
        'exprice',
        'info',
        'isSale',
        'active'
    ];

    protected $casts = [
        'price' => 'double',
        'exprice' => 'double',
        'active' => 'bool',
        'isSale' => 'bool'
    ];
}
