<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Publisher
{
    protected $table = 'publisher';
    public $timestamps = false;
    protected $fillable = [
        'address',
        'publisher_name',
        'telephone_no'
    ];
}
