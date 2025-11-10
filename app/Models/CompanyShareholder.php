<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyShareholder extends Model
{
    protected $fillable = [
        'company_id',
        'name',
        'holding_percentage',
        'category',
        'display_order',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}

