<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'photo',
        'content',
        'rating'
    ];

    public function boardingHouse () {
        return $this->belongsTo(BoardingHouse::class);
    }
}
