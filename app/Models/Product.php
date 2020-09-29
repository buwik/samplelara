<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillabe = [
        'product_name',
        'product_code',
        'details',
        'logo'
    ];
}
