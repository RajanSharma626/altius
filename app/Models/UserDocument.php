<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserDocument extends Model
{
    protected $fillable = [
        'user_id',
        'document_type',
        'document_name',
        'file_path',
        'file_name',
        'file_size',
        'mime_type',
        'document_password',
    ];

    /**
     * Get the user that owns the document.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the full file path.
     */
    public function getFullPathAttribute(): string
    {
        return storage_path('app/' . $this->file_path);
    }
}
