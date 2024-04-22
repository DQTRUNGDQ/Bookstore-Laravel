<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
   protected $table = 'orders';
    use HasFactory;
        protected $fillable = [
        'customer_name',
        'phone_number',
        'address'
    ];
}