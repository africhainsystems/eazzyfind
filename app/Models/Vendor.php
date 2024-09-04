<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'photo',
        'email',
        'phone',
        'password',
        'amount',
        'avg_rating',
        'email_verified_at',
        'show_email_address',
        'show_phone_number',
        'verified',
        'status'
    ];
}
