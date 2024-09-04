<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'meta_keyword',
        'meta_description',
        'address',
        'vendor_id',
        'category_id',
        'feature_image',
        'video_url',
        'average_rating',
        'latitude',
        'longitude',
        'aminities',
        'features',
        'visibility',
        'is_featured',
        'city_id',
        'status'
    ];

    public function providers(): BelongsTo
    {
        return $this->belongsTo(Vendor::class, 'vendor_id');
    }

    public function categories(): BelongsTo
    {
        return $this->belongsTo(ListingCategory::class, 'category_id');
    }
}
