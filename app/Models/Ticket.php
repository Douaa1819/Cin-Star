<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model {
    protected $fillable = ['reservation_id', 'barcode', 'cinema_name'];

    public function reservation() {
        return $this->belongsTo(Reservation::class);
    }
}

