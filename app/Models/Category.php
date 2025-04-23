<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Category extends Model
{
    use HasFactory;
    protected $table = [
        'image',
        'name',
        'slug',
    ];

    public function boardingHouses () {
        return $this->hasMany(BoardingHouse::class);
    }
}
