<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $casts = [
        'multi_images' => 'array', 
    ];
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'logo',
        'cover_image',
        'description',
        'multi_images',
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
        'status',
        'available',
        'user_id',
        'discount',
        'menu',
        'google_map',
        'smoking',
        'sub_towns'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getMultiImagesAttribute($value)
    {
        return json_decode($value, true);
    }

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'restaurant_menu', 'restaurant_id', 'menu_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'restaurant_id');
    }
}
