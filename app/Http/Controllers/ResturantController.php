<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ResturantController extends Controller {
    public function index() {
        $restaurants = Restaurant::latest()->paginate(10);
        return view('resturant.restaurants', compact('restaurants'));
    }

    public function create() {
        $categories = Category::all();
        return view('resturant.restaurant', compact('categories'));
    }

    public function store(Request $request) {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'zip_code' => 'required|string',
            'latitude' => 'nullable|string',
            'longitude' => 'nullable|string',
            'phone_number' => 'required|string',
            'email' => 'required|email',
            'website_url' => 'nullable|string',
            'operating_hours' => 'required|string',
            'closed_days' => 'nullable|string',
            'price_range' => 'required|string',
            'wifi_availability' => 'required|boolean',
            'parking_availability' => 'required|boolean',
            'outdoor_seating' => 'required|boolean',
            'social_links' => 'nullable|json',
        ]);
    
        $destinationPath = public_path('assets/restaurants');
        if (!File::exists($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true);
        }
    
        $logoPath = null;
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time() . '_logo.' . $logo->getClientOriginalExtension();
            $logo->move($destinationPath, $logoName);
            $logoPath = 'assets/restaurants/' . $logoName;
        }
    
        $coverImagePath = null;
        if ($request->hasFile('cover_image')) {
            $coverImage = $request->file('cover_image');
            $coverImageName = time() . '_cover.' . $coverImage->getClientOriginalExtension();
            $coverImage->move($destinationPath, $coverImageName);
            $coverImagePath = 'assets/restaurants/' . $coverImageName;
        }
    
        Restaurant::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'logo' => $logoPath,
            'cover_image' => $coverImagePath,
            'description' => $request->description,
            'address' => $request->address,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'website_url' => $request->website_url,
            'operating_hours' => $request->operating_hours,
            'closed_days' => $request->closed_days,
            'price_range' => $request->price_range,
            'wifi_availability' => $request->wifi_availability,
            'parking_availability' => $request->parking_availability,
            'outdoor_seating' => $request->outdoor_seating,
            'social_links' => $request->social_links,
        ]);
    
        return redirect()->route('resturant.index')->with('success', 'Restaurant created successfully!');
    }
    

    public function edit(Restaurant $restaurant) {
        $categories = Category::all();
        return view('resturant.restaurant', compact('restaurant', 'categories'));
    }

    public function update(Request $request, Restaurant $restaurant) {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'description' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'zip_code' => 'required|string',
            'latitude' => 'nullable|string',
            'longitude' => 'nullable|string',
            'phone_number' => 'required|string',
            'email' => 'required|email',
            'website_url' => 'nullable|string',
            'operating_hours' => 'required|string',
            'closed_days' => 'nullable|string',
            'price_range' => 'required|string',
            'wifi_availability' => 'required|boolean',
            'parking_availability' => 'required|boolean',
            'outdoor_seating' => 'required|boolean',
            'social_links' => 'nullable|json',
        ]);

        $destinationPath = public_path('assets/restaurants');
        if (!File::exists($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true);
        }

        if ($request->hasFile('logo')) {
            if ($restaurant->logo && File::exists(public_path($restaurant->logo))) {
                File::delete(public_path($restaurant->logo));
            }
            $logo = $request->file('logo');
            $logoName = time() . '_logo.' . $logo->getClientOriginalExtension();
            $logo->move($destinationPath, $logoName);
            $restaurant->logo = 'assets/restaurants/' . $logoName;
        }

        if ($request->hasFile('cover_image')) {
            if ($restaurant->cover_image && File::exists(public_path($restaurant->cover_image))) {
                File::delete(public_path($restaurant->cover_image));
            }
            $coverImage = $request->file('cover_image');
            $coverImageName = time() . '_cover.' . $coverImage->getClientOriginalExtension();
            $coverImage->move($destinationPath, $coverImageName);
            $restaurant->cover_image = 'assets/restaurants/' . $coverImageName;
        }

        $restaurant->update($request->except(['logo', 'cover_image']));

        return redirect()->route('resturant.index')->with('success', 'Restaurant updated successfully!');
    }

    public function destroy(Restaurant $restaurant) {
        if ($restaurant->logo && File::exists(public_path($restaurant->logo))) {
            File::delete(public_path($restaurant->logo));
        }

        if ($restaurant->cover_image && File::exists(public_path($restaurant->cover_image))) {
            File::delete(public_path($restaurant->cover_image));
        }

        $restaurant->delete();

        return redirect()->route('resturant.index')->with('success', 'Restaurant deleted successfully!');
    }
}
