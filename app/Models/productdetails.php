<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productdetails extends Model
{

    protected $table = 'productdetails';
    use HasFactory;
    protected $fillable = [
        'dealtoday_id',
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