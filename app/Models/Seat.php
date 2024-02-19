<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model {
    protected $fillable = ['cinema_id', 'seat_number'];

    public function cinema() {
        return $this->belongsTo(Cinema::class);
    }
}

