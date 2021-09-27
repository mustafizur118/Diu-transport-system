<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'title',
        'description',
        'published_at',
        'image',
        'link',
        'status',

    ];
    protected $dates = [
        'published_at',
    ];
}
