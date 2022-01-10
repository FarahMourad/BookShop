<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Category
{
    protected $table = 'category';
    public $timestamps = false;
    protected $fillable = [
        'category'
    ];
}
