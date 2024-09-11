<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListingProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'listing_id',
        'provider_id',
        'product_name',
        'product_price',
        'product_description',
        'product_thumb'
    ];
}
