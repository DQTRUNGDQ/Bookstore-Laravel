<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suggestionwidget extends Model
{
    protected $table = 'sugestionproduct';
    use HasFactory;
    protected $fillable = [
        'tab',
        'image',
        'name',
        'price',
        'imgstatus',
        'timedelivery'
    ];
}