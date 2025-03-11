<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\City;
use App\Models\Restaurant;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $discountedRestaurants = Restaurant::where('status', 1)
            ->whereNotNull('discount')
            ->where('discount', '>', 0)
            ->paginate(10);

        // dd($discountedRestaurants);
        $restaurants = Restaurant::where('status', 1)->paginate(10);

        return view('home', compact('restaurants', 'discountedRestaurants'));
    }

    public function detail($id)
    {
        $restaurant = Restaurant::where('status', 1)->findOrFail($id);
        return view('restaurant-detail', compact('restaurant'));
    }

    public function search(Request $request)
    {
        $query = $request->input('city');
        $checkIn = $request->input('check_in');

        $restaurants = Restaurant::where('status', 1)
            ->when($query, function ($q) use ($query) {
                return $q->where('city', 'LIKE', "%{$query}%");
            })
            ->paginate(10);

        return view('search-results', compact('restaurants', 'query', 'checkIn'));
    }


    public function pricesearch(Request $request)
    {

        $query = $request->input('city');
        $checkIn = $request->input('check_in');
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');


        $restaurants = Restaurant::where('status', 1)
            ->when($query, function ($q) use ($query) {
                return $q->where('city', 'LIKE', "%{$query}%");
            })
            ->when($minPrice && $maxPrice, function ($q) use ($minPrice, $maxPrice) {
                return $q->whereBetween('price_range', [$minPrice, $maxPrice]);
            })
            ->paginate(10);
        
        return view('search-results', compact('restaurants', 'query', 'checkIn', 'minPrice', 'maxPrice'));
    }

    public function searchcheckbox(Request $request)
    {
        $query = $request->input('city');
        $checkIn = $request->input('check_in');
        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');
        $filterPrice = $request->input('filter_price', []);
    
       
        $restaurants = Restaurant::where('status', 1)
            ->when($minPrice && $maxPrice, function ($q) use ($minPrice, $maxPrice) {
                return $q->whereBetween('price_range', [$minPrice, $maxPrice]);
            });
    
       
        $restaurants = $restaurants->get(); 
    
        // dd($restaurants); 
    
        return view('search-results', compact('restaurants', 'query', 'checkIn', 'minPrice', 'maxPrice'));
    }
    


    public function getCities()
    {
        // $cities = City::all();
        // return response()->json($cities);
    }



    public function booking() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
