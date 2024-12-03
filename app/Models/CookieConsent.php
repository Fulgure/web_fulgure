<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CookieConsent extends Model
{
    protected $fillable = [
        'ip_address',
        'identifier',
        'analytics',
        'marketing',
        'personalisation'
    ];
}
