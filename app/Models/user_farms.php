<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class user_farms extends Model
{
    use HasFactory;
    protected $table = "user_farms";

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function farm(): BelongsTo
    {
        return $this->belongsTo(farm::class);
    }
}
