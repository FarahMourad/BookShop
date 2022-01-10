<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Book
{
    protected $table = 'book';
    public $timestamps = false;
    protected $fillable = [
        'category',
        'ISBN',
        'publication_year',
        'publisher_name',
        'quantity',
        'selling_price',
        'threshold',
        'title'
    ];
}
