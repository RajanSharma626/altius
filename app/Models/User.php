<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'full_name',
        'mobile_no',
        'pan_no',
        'address',
        'nationality',
        'phone_no',
        'referral_code',
        'status',
        'rejection_reason',
        'approved_at',
        'approved_by',
        'is_admin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'approved_at' => 'datetime',
            'is_admin' => 'boolean',
        ];
    }

    /**
     * Get the demat details for the user.
     */
    public function dematDetails()
    {
        return $this->hasOne(UserDematDetail::class);
    }

    /**
     * Get the bank details for the user.
     */
    public function bankDetails()
    {
        return $this->hasOne(UserBankDetail::class);
    }

    /**
     * Get the documents for the user.
     */
    public function documents()
    {
        return $this->hasMany(UserDocument::class);
    }

    /**
     * Get the user who approved this user.
     */
    public function approver()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    /**
     * Check if user is approved.
     */
    public function isApproved()
    {
        return $this->status === 'approved';
    }

    /**
     * Check if user is pending approval.
     */
    public function isPending()
    {
        return $this->status === 'pending';
    }

    /**
     * Check if user is rejected.
     */
    public function isRejected()
    {
        return $this->status === 'rejected';
    }
}
