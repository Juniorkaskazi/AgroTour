<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class review extends Model
{
    use HasFactory;
    protected $table = "reviews";

    public $timestamps = false;

    protected $fillable = [
        'rating',
        'comment',
        'user_name',
    ];
    public function farm(): BelongsTo
    {
        return $this->belongsTo(farm::class);
    }
}
