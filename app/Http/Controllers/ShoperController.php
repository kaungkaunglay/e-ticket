<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ShoperController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $isAdmin = $user->roles()->where('name', 'admin')->exists();

        if ($isAdmin) {
            $restaurants = Restaurant::latest()->paginate(10);
        } else {
            $restaurants = Restaurant::where('user_id', $user->id)->latest()->paginate(10);
        }

        return view('shoper.restaurants', compact('restaurants'));
    }


    public function create()
    {
        $categories = Category::all();
        $restaurant = new Restaurant();
        return view('shoper.restaurant', compact('categories', 'restaurant'));
    }

    public function show(Restaurant $restaurant)
    {
        return view('shoper.restaurant-detail', compact('restaurant'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'multi_images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
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
            'avaliable' => 'nullable|string',
            'status' => 'required|in:0,1',
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


        $multiImagesPaths = [];
        if ($request->hasFile('multi_images')) {
            foreach ($request->file('multi_images') as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move($destinationPath, $imageName);
                $multiImagesPaths[] = 'assets/restaurants/' . $imageName;
            }
        }


        $user = auth()->user();
        $isAdmin = $user->roles()->where('name', 'admin')->exists();
        $userId = $isAdmin ? null : $user->id;
        Restaurant::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'logo' => $logoPath,
            'cover_image' => $coverImagePath,
            'multi_images' => !empty($multiImagesPaths) ? json_encode($multiImagesPaths) : null,
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
            'status' => $request->status,
            'avaliable' => $request->available,
            'user_id' => $userId,
        ]);

        return redirect()->route('shoper.index')->with('success', 'Restaurant created successfully!');
    }



    public function edit(Restaurant $restaurant)
    {
        $categories = Category::all();
        return view('shoper.restaurant', compact('restaurant', 'categories'));
    }


    public function update(Request $request, Restaurant $restaurant)
    {

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
            'multi_images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'removed_images' => 'nullable|string',
            'avaliable' => 'nullable|string',
            'status' => 'required|in:0,1',
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
            $logo->move(public_path('assets/restaurants'), $logoName);
            $restaurant->logo = 'assets/restaurants/' . $logoName;
        }
        if ($request->hasFile('cover_image')) {

            if ($restaurant->cover_image && File::exists(public_path($restaurant->cover_image))) {
                File::delete(public_path($restaurant->cover_image));
            }

            $coverImage = $request->file('cover_image');
            $coverImageName = time() . '_cover.' . $coverImage->getClientOriginalExtension();
            $coverImage->move(public_path('assets/restaurants'), $coverImageName);
            $restaurant->cover_image = 'assets/restaurants/' . $coverImageName;
        }

        if ($request->hasFile('multi_images')) {

            if ($restaurant->multi_images) {
                foreach (json_decode($restaurant->multi_images) as $oldImage) {
                    if (File::exists(public_path($oldImage))) {
                        File::delete(public_path($oldImage));
                    }
                }
            }

            $multiImagesPaths = [];
            foreach ($request->file('multi_images') as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move($destinationPath, $imageName);
                $multiImagesPaths[] = 'assets/restaurants/' . $imageName;
            }
            $restaurant->multi_images = json_encode($multiImagesPaths);
        }


        $restaurant->update($request->except(['logo', 'cover_image', 'multi_images']));

        return redirect()->route('shoper.index')->with('success', 'Restaurant updated successfully!');
    }

    public function destroy(Restaurant $restaurant)
    {
        if ($restaurant->logo && File::exists(public_path($restaurant->logo))) {
            File::delete(public_path($restaurant->logo));
        }

        if ($restaurant->cover_image && File::exists(public_path($restaurant->cover_image))) {
            File::delete(public_path($restaurant->cover_image));
        }

        $restaurant->delete();

        return redirect()->route('shoper.index')->with('success', 'Restaurant deleted successfully!');
    }
}
