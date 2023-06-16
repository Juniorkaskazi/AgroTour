<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class amenity extends Model
{
    use HasFactory;

    protected $table = "amenities";

    protected $fillable = [
        'name'
    ];
}
