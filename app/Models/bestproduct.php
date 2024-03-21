<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bestproduct extends Model
{
    protected $table = 'bestproduct';
    use HasFactory;
    protected $fillable = [
        'image',
        'category',
        'name',
        'price',
        'imgstatus',
        'timedelivery'
    ];
}