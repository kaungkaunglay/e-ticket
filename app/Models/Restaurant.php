<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'logo',
        'cover_image',
        'description',
        'address',
        'city',
        'zip_code',
        'latitude',
        'longitude',
        'phone_number',
        'email',
        'website_url',
        'operating_hours',
        'closed_days',
        'price_range',
        'wifi_availability',
        'parking_availability',
        'outdoor_seating',
        'social_links',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
