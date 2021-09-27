<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $fillable = [
        'route_name',
        'destination_from',
        'destination_to',
        'depart_time',
        'fare',
        'route_description',
        'status',
    ];

    protected $dates = [
        'depart_time',
    ];

    public function stuff()
    {
        return $this->hasMany(Stuff::class);
    }
    public function bus()
    {
        return $this->hasMany(Bus::class);
    }

    public function stoppages()
    {
        return $this->hasMany(Stoppages::class);
    }

}
