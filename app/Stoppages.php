<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stoppages extends Model
{
    protected $fillable = [
        'route_id',
        'name',
        'status',
    ];

    public function route()
    {
        return $this->belongsTo(Route::class);
    }
}
