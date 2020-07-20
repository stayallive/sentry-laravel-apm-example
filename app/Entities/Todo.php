<?php

namespace App\Entities;

use App\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property \Carbon\Carbon|null $finished_at
 */
class Todo extends Entity
{
    protected $table    = 'todos';
    protected $dates    = [
        'finished_at',
    ];
    protected $fillable = [
        'name',
    ];

    public function getFinishedAttribute(): bool
    {
        return $this->finished_at !== null;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
