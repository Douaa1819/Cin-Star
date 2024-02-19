<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model {
    protected $fillable = ['user_id', 'movie_id', 'cinema_id', 'seat_numbers', 'status'];

    // Define relationships(when we has a foreign key we do belongs to to access the data)
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function movie() {
        return $this->belongsTo(Movie::class);
    }
    public function cinema() {
        return $this->belongsTo(Cinema::class);
    }
    public function ticket() {
        return $this->hasOne(Ticket::class);
    }
}
