<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserDematDetail extends Model
{
    protected $fillable = [
        'user_id',
        'dp_id',
        'client_id',
    ];

    /**
     * Get the user that owns the demat details.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
