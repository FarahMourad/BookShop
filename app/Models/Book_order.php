<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Book_order extends Model
{
    protected $table = 'book_order';
    public $timestamps = false;
    protected $fillable = [
        'ISBN',
        'id',
        'publisher_name',
        'quantity'
    ];
}
