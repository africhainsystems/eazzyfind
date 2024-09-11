<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingWorkHour extends Model
{
    use HasFactory;

    protected $fillable = [
        'listing_id',
        'day',
        'open_time',
        'close_time'
    ];
}
