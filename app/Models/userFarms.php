<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class userFarms extends Model
{
    use HasFactory;
    protected $table = "user_farms";

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'farm_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function farm(): BelongsTo
    {
        return $this->belongsTo(farm::class);
    }
}
