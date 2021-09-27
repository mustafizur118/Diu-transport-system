<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stuff extends Model
{
    protected $fillable = [
        'category_id',
        'route_id',
        'bus_name',
        'designation',
        'driver_name',
        'driver_phone',
        'helper_name',
        'helper_phone',
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
