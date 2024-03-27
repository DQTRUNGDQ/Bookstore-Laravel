<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class similarproducts extends Model
{
   protected $table = 'similarproducts';
    use HasFactory;
    protected $fillable = [
        'name',
        'imgbook'
    ];
}