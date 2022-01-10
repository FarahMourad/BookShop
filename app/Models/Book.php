<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Book extends Model
{
    protected $table = 'book';
    public $timestamps = false;
    protected $fillable = [
        'ISBN',
        'title',
        'publication_year',
        'publisher_name',
        'selling_price',
        'category',
        'quantity',
        'threshold'
    ];
}
