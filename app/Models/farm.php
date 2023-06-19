<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class farm extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

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

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('farm_photos');
    }
    public function reservation(): HasMany
    {
        return $this->hasMany(reservation::class, 'farm');
    }
    public function review(): HasMany
    {
        return $this->hasMany(review::class, 'farm');
    }

    public function userFarms(): HasMany
    {
        return $this->hasMany(userFarms::class);
    }
}
