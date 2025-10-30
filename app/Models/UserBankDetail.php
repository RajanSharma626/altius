<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserBankDetail extends Model
{
    protected $fillable = [
        'user_id',
        'bank_name',
        'account_no',
        'ifsc_code',
    ];

    /**
     * Get the user that owns the bank details.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
