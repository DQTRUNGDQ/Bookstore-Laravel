<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quicktool extends Model
{
    protected $table = 'quicktoolswidget';
    use HasFactory;
    protected $fillable = [
        'image',
        'title'
    ];
}