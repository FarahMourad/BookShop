<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Publisher extends Model
{
    protected $table = 'publisher';
    public $timestamps = false;
    protected $fillable = [
        'address',
        'publisher_name',
        'telephone_no'
    ];
}
