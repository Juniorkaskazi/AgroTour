<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class reservation extends Model
{
    use HasFactory;

    protected $table = "reservations";

    protected $fillable = [
        'user_name',
        'check_in',
        'check_out',
        'adult',
        'children',
        'room',
        'night',
        'amenities',
        'email',
        'phone_no',
        'status',
    ];

    protected $casts = [
        'check_in' => 'datetime:Y-m-d',
        'check_out' => 'datetime:Y-m-d',
        'amenities' => 'array',
    ];

    public function farm(): BelongsTo
    {
        return $this->belongsTo(farm::class);
    }
}
