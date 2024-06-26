<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    use HasFactory;
        protected $fillable = [
            'id',
            'userId',
            'product_id' ,
            'product_name' ,
            'price' ,
            'image' ,
            'quantity',
            'checked'
    ];
}
