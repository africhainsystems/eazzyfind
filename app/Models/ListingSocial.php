<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingSocial extends Model
{
    use HasFactory;

    protected $fillable = [
        'listing_id',
        'social_link',
        'social_url'
    ];
}
