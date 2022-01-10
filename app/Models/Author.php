<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Author
{
    protected $table = 'author';
    public $timestamps = false;
    protected $fillable = [
        'author_name',
        'ISBN'
    ];
}
