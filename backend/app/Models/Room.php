<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Room extends Model
{
    use HasFactory;

    public function seats()
    {
        return $this->belongsToMany(Seat::class, 'room_seat', 'room_id', 'seat_id');
    }

    protected $fillable=[
        'room_name',
        'movie'
    ];

}
