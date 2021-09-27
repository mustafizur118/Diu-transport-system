<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'sub_title',
        'description',
        'status',
        'image',
    ];

    public function category(){

        return $this->belongsTo(Bus_Category::class);
    }
}
