<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brandofficial extends Model
{
    protected $table = 'brandofficial';
    use HasFactory;
    protected $fillable = [
        'imgbook',
        'imgbrand',
        'title',
    ];
}