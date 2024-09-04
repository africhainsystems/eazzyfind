<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'listing_id',
        'rating',
        'review',
        'status',
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function listings(): BelongsTo
    {
        return $this->belongsTo(Listing::class, 'listing_id');
    }
}
