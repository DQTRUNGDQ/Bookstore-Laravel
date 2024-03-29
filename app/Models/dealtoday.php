<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dealtoday extends Model
{
    protected $table = 'dealtoday';
    protected $primaryKey = 'dealtoday_id';
    
    use HasFactory;
    protected $fillable = [
        'name',
        'category',
        'subcategory',
        'discount',
        'image',
        'pricediscount',
        'percentsold',
        'status',
        'quantity'
    ];
}