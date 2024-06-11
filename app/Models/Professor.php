<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Professor extends Model
{
    use HasFactory;

    /**
     * Get the Committee that owns the Professor
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Committee(): BelongsTo
    {
        return $this->belongsTo(Committee::class);
    }

    /**
     * Get the user associated with the Professor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
