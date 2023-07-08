<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Seat extends Model
{
    use HasFactory;

    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'room_seat', 'seat_id', 'room_id');
    }

    protected $fillable = [
        'seat_number',
        'reserved'

    ];

}





