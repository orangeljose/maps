<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'location_title',
        'coords_lat',
        'coords_lng',
        'number',
        'addressline1',
        'addressline2',
        'city',
        'country',
    ];
}


