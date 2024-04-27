<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    use HasFactory;
    protected $fillable = [
        'category_id',
        'name',
        'category',
        'author',
        'description',
        'price',
        'rating',
        'sold',
        'discount_percent',
        'delivery_time',
    ];
}