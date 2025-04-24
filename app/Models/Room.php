<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'room_type',
        'square_feet',
        'price_per_month',
        'is_available'
    ];

    public function boardingHouses () {
        return $this->belongsTo(BoardingHouse::class);
    }

    public function roomImages () {
        return $this->hasMany(RoomImage::class);
    }

    public function transactions () {
        return $this->hasMany(Transaction::class);
    }
}
