<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Sales extends Model
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
