<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    protected $fillable = [
        'cinema_id', 'name', 'capacity'
    ];

    // Define the relationship with Cinema
    public function cinema()
    {
        return $this->belongsTo(Cinema::class);
    }

    // Define the relationship with Schema
    public function schema()
    {
        return $this->hasOne(Schema::class);
    }

}
