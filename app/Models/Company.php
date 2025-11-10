<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'short_name',
        'ticker',
        'listing_status',
        'logo_url',
        'avatar_letter',
        'isin',
        'pan',
        'email',
        'phone',
        'address',
        'date_of_incorporation',
        'last_agm_date',
        'data_as_of',
        'source_of_data',
        'company_type',
        'industry',
        'founded_year',
        'registered_address',
        'about_summary',
        'overview_body',
        'business_overview',
    ];

    protected $casts = [
        'date_of_incorporation' => 'date',
        'last_agm_date' => 'date',
        'data_as_of' => 'date',
    ];

    public function shareholders()
    {
        return $this->hasMany(CompanyShareholder::class)->orderBy('display_order');
    }
}
