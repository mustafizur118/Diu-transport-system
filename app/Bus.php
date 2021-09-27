<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = [
        'category_id',
        'route_id',
        'name',
        'tracking_number',
        'total_seats',
        'bus_code',
        'status',

    ];

    public function category(){

        return $this->belongsTo(Bus_Category::class);
    }

    public function route()
    {
        return $this->belongsTo(Route::class);
    }
}
