<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    //
    protected $fillable = [
        'image', 'folder',
    ];
}
