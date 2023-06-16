<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class farm extends Model
{
    use HasFactory;

    protected $table = "farms";

    protected $fillable = [
        'name',
        'description',
        'location',
        'activities',
        'contact_info',
        'price',
        'amenities',
        'timeline',
    ];

    protected $casts = [
        'amenities' => 'array',
        'name' => 'string',
        'location' => 'string',
        'created_at' => 'datetime:Y-m-d',
        'apdated_at' => 'datetime:Y-m-d',
    ];

    public function reservation(): HasMany
    {
        return $this->hasMany(reservation::class);
    }
    public function review(): HasMany
    {
        return $this->hasMany(review::class);
    }

    public function userFarms(): HasMany
    {
        return $this->hasMany(user_farms::class);
    }
}
