<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class article extends Model
{
    use HasFactory;
    protected $fillable = [
        "title", "short_description", "content", "cover", "user_id", "category_id", "created_at", "updated_at"
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comment(): HasMany
    {
        return $this->hasMany(comment::class);
    }
    
}
