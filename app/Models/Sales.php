<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Sales
{
    protected $table = 'sales';
    public $timestamps = false;
    protected $fillable = [
        'copies',
        'date',
        'ISBN',
        'sales_id',
        'user_id'
    ];
}
