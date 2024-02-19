<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Cinema extends Model {
    use HasFactory;
    protected $fillable = ['name', 'location'];

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }
    public function seats() {
        return $this->hasMany(Seat::class);
    }
}
