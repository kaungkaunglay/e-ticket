<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Week;
use App\Models\City;
use App\Models\Sub_towns;

class ResturantController extends Controller
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

        return view('resturant.restaurants', compact('restaurants'));
    }


    public function getSubadminTowns($cityName)
    {
        $city = City::where('name', $cityName)->first();
        if ($city) {
            $subTowns = Sub_towns::where('city_id', $city->id)->get();
            return response()->json($subTowns);
        }
        return response()->json([]);
    }


    public function create()
    {
        $cities = City::all();
        $subTowns = Sub_towns::all();
        $categories = Category::all();
        $menus = Menu::all();
        $weeks = Week::all();
        $restaurant = new Restaurant();
        return view('resturant.restaurant', compact('categories', 'restaurant', 'menus', 'weeks','cities','subTowns'));
    }

    public function show(Restaurant $restaurant)
    {
        return view('resturant.restaurant-detail', compact('restaurant'));
    }

    public function all()
    {
        $restaurants = Restaurant::where('status', 1)->paginate(10);
        return view('restaurant-list', compact('restaurants'));
    }

    public function store(Request $request)
{
    $request->validate([
        'category_id' => 'required|exists:categories,id',
        'name' => 'required|string|max:255',
        'logo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        'multi_images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'description' => 'required|string',
        'address' => 'required|string',
        'city' => 'required|string',
        'zip_code' => 'required|string',
        'phone_number' => 'required|string',
        'email' => 'required|email',
        'website_url' => 'nullable|string',
        'operating_hours' => 'required|string',
        'closed_days' => 'nullable|string',
        'price_range' => 'required|string',
        'social_links' => 'nullable|json',
        'status' => 'required|in:0,1',
        'google_map' => 'nullable|string',
        'menu' => 'required|json',
        'sub_town' => 'nullable|string', 
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

    
    $multiImagesPaths = [];
    if ($request->hasFile('multi_images')) {
        foreach ($request->file('multi_images') as $image) {
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $multiImagesPaths[] = 'assets/restaurants/' . $imageName;
        }
    }

   
    $city = City::firstOrCreate(['name' => $request->city]);

   
    $subTown = $request->sub_town; 
    if (empty($subTown)) {
        $subTown = null; 
    }

    // Create the restaurant
    $user = auth()->user();
    $isAdmin = $user->roles()->where('name', 'admin')->exists();
    $userId = $isAdmin ? null : $user->id;

    Restaurant::create([
        'category_id' => $request->category_id,
        'name' => $request->name,
        'logo' => $logoPath,
        'multi_images' => !empty($multiImagesPaths) ? json_encode($multiImagesPaths) : null,
        'description' => $request->description,
        'address' => $request->address,
        'city' => $request->city,
        'zip_code' => $request->zip_code,
        'phone_number' => $request->phone_number,
        'email' => $request->email,
        'website_url' => $request->website_url,
        'operating_hours' => $request->operating_hours,
        'closed_days' => $request->closed_days,
        'price_range' => $request->price_range,
        'social_links' => $request->social_links,
        'status' => $request->status,
        'google_map' => $request->google_map,
        'menu' => $request->menu,
        'sub_towns' => $subTown, 
        'user_id' => $userId,
        'available' => $request->status,
        
    ]);

    return redirect()->route('resturant.index')->with('success', 'Restaurant created successfully!');
}





    public function edit(Restaurant $restaurant)
    {   
        $cities = City::all();
        $subTowns = Sub_towns::all();
        $weeks = Week::all();
        $categories = Category::all();
        $menus = Menu::all();
        $restaurant->menu = json_decode($restaurant->menu, true) ?? [];
        $restaurant->weeks = json_decode($restaurant->closed_days, true) ?? [];

        return view('resturant.restaurant', compact('restaurant', 'categories', 'menus', 'weeks','cities','subTowns'));
    }



    // public function update(Request $request, Restaurant $restaurant)
    // {
    //     $request->validate([
    //         'category_id' => 'required|exists:categories,id',
    //         'name' => 'required|string|max:255',
    //         'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    //         'cover_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    //         'description' => 'required|string',
    //         'address' => 'required|string',
    //         'city' => 'required|string',
    //         'zip_code' => 'required|string',
    //         'phone_number' => 'required|string',
    //         'email' => 'required|email',
    //         'website_url' => 'nullable|string',
    //         'operating_hours' => 'required|string',
    //         'closed_days' => 'nullable|json',
    //         'price_range' => 'required|string',
    //         // 'wifi_availability' => 'boolean',
    //         // 'parking_availability' => 'boolean',
    //         // 'outdoor_seating' => 'boolean',
    //         'social_links' => 'nullable|json',
    //         'multi_images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    //         'removed_images' => 'nullable|string',
    //         'available' => 'nullable|string',
    //         'status' => 'required|in:0,1',
    //         'google_map' => 'nullable|string',
    //         'menu' => 'nullable|json',
    //         'sub_towns' => 'nullable|string', 
    //     ]);

    //     $destinationPath = public_path('assets/restaurants');
    //     if (!File::exists($destinationPath)) {
    //         File::makeDirectory($destinationPath, 0755, true);
    //     }

    //     if ($request->hasFile('logo')) {
    //         if ($restaurant->logo && File::exists(public_path($restaurant->logo))) {
    //             File::delete(public_path($restaurant->logo));
    //         }
    //         $logo = $request->file('logo');
    //         $logoName = time() . '_logo.' . $logo->getClientOriginalExtension();
    //         $logo->move($destinationPath, $logoName);
    //         $restaurant->logo = 'assets/restaurants/' . $logoName;
    //     }

    //     if ($request->hasFile('cover_image')) {
    //         if ($restaurant->cover_image && File::exists(public_path($restaurant->cover_image))) {
    //             File::delete(public_path($restaurant->cover_image));
    //         }
    //         $coverImage = $request->file('cover_image');
    //         $coverImageName = time() . '_cover.' . $coverImage->getClientOriginalExtension();
    //         $coverImage->move($destinationPath, $coverImageName);
    //         $restaurant->cover_image = 'assets/restaurants/' . $coverImageName;
    //     }

    //     if ($request->hasFile('multi_images')) {
    //         if ($restaurant->multi_images) {
    //             foreach (json_decode($restaurant->multi_images) as $oldImage) {
    //                 if (File::exists(public_path($oldImage))) {
    //                     File::delete(public_path($oldImage));
    //                 }
    //             }
    //         }
    //         $multiImagesPaths = [];
    //         foreach ($request->file('multi_images') as $image) {
    //             $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
    //             $image->move($destinationPath, $imageName);
    //             $multiImagesPaths[] = 'assets/restaurants/' . $imageName;
    //         }
    //         $restaurant->multi_images = json_encode($multiImagesPaths);
    //     }


    //     $restaurant->update($request->except(['logo', 'cover_image', 'multi_images']));

    //     return redirect()->route('resturant.index')->with('success', 'Restaurant updated successfully!');
    // }



    public function update(Request $request, Restaurant $restaurant)
{
    $request->validate([
        'category_id' => 'required|exists:categories,id',
        'name' => 'required|string|max:255',
        'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'multi_images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'description' => 'required|string',
        'address' => 'required|string',
        'city' => 'required|string',
        'zip_code' => 'required|string',
        'phone_number' => 'required|string',
        'email' => 'required|email',
        'website_url' => 'nullable|string',
        'operating_hours' => 'required|string',
        'closed_days' => 'nullable|string',
        'price_range' => 'required|string',
        'social_links' => 'nullable|json',
        'status' => 'required|in:0,1',
        'google_map' => 'nullable|string',
        'parking_availability' => 'nullable|boolean',
        'outdoor_seating' => 'nullable|boolean',
        'smoking' => 'nullable|boolean',
        'available' => 'nullable|string',
        'wifi_availability' => 'nullable|boolean',
        'menu' => 'required|json',
        'sub_town' => 'nullable|string',
    ]);

    $destinationPath = public_path('assets/restaurants');
    if (!File::exists($destinationPath)) {
        File::makeDirectory($destinationPath, 0755, true);
    }

    // Handle logo update
    $logoPath = $restaurant->logo;
    if ($request->hasFile('logo')) {
        if ($restaurant->logo && File::exists(public_path($restaurant->logo))) {
            File::delete(public_path($restaurant->logo));
        }
        $logo = $request->file('logo');
        $logoName = time() . '_logo.' . $logo->getClientOriginalExtension();
        $logo->move($destinationPath, $logoName);
        $logoPath = 'assets/restaurants/' . $logoName;
    }

    // Handle multiple images upload
    $multiImagesPaths = [];
    if ($restaurant->multi_images) {
        // Ensure $restaurant->multi_images is treated as a JSON string
        $multiImagesPaths = is_string($restaurant->multi_images) ? json_decode($restaurant->multi_images, true) : $restaurant->multi_images;
    }

    if ($request->hasFile('multi_images')) {
        foreach ($request->file('multi_images') as $image) {
            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $multiImagesPaths[] = 'assets/restaurants/' . $imageName;
        }
    }

    // Handle sub-town
    $subTown = $request->sub_town;
    if (empty($subTown)) {
        $subTown = $restaurant->sub_towns;
    }

    // Update the restaurant
    $restaurant->update([
        'category_id' => $request->category_id,
        'name' => $request->name,
        'logo' => $logoPath,
        'multi_images' => !empty($multiImagesPaths) ? json_encode($multiImagesPaths) : null,
        'description' => $request->description,
        'address' => $request->address,
        'city' => $request->city,
        'zip_code' => $request->zip_code,
        'phone_number' => $request->phone_number,
        'email' => $request->email,
        'website_url' => $request->website_url,
        'operating_hours' => $request->operating_hours,
        'closed_days' => $request->closed_days,
        'price_range' => $request->price_range,
        'social_links' => $request->social_links,
        'status' => $request->status,
        'google_map' => $request->google_map,
        'parking_availability' => $request->parking_availability,
        'outdoor_seating' => $request->outdoor_seating,
        'smoking' => $request->smoking,
        'available' => $request->available,
        'wifi_availability' => $request->wifi_availability,
        'menu' => $request->menu,
        'sub_towns' => $subTown,
    ]);

    return redirect()->route('resturant.index')->with('success', 'Restaurant updated successfully!');
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

        return redirect()->route('resturant.index')->with('success', 'Restaurant deleted successfully!');
    }
}
