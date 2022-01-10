<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Book_order
{
    protected $table = 'book_order';
    public $timestamps = false;
    protected $fillable = [
        'ISBN',
        'order_id',
        'publisher_name',
        'quantity'
    ];
}
