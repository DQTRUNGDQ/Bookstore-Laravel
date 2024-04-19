<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productdetails extends Model
{

    protected $table = 'product_details';
    use HasFactory;
    protected $fillable = [
        'products_id',
        'issuingcompany',
        'versiontype',
        'publicationdate',
        'size',
        'translator',
        'covertype',
        'pages',
        'language',
        'publishingcompany',
        'description',
        'descriptionmore'
    ];
}