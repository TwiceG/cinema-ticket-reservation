<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Movie extends Model
{
    use HasFactory;

    //!TODO
    public function room()
    {
        return $this->belongsTo(Room::class,'room_id' );
    }

    protected $fillable=[
        'movie_name',
        'length'
    ];

}
