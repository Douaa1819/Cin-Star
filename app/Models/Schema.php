<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schema extends Model
{
    protected $fillable = [
        'hall_id', 'name', 'layout'
    ];

    public function hall()
    {
        return $this->belongsTo(Hall::class);
    }
}
