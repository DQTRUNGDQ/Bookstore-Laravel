<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class careproduct extends Model
{
    protected $table = 'careproduct';
    use HasFactory;
    protected $fillable = [
        'image',
        'name',
        'imgstatus',
        'timedelivery'
    ];
}