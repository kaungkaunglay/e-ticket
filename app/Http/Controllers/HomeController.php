<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\City;
use App\Models\User;
use App\Models\Booking;
use App\Models\Restaurant;
use App\Models\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionConfirmation;
use App\Models\Menu;
use Carbon\Carbon;
use DateTime;

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
        $restaurants = Restaurant::where('status', 1)->paginate(8);
        $menus = Menu::all();
        $category = Category::all();
        $priceRange = Restaurant::whereNotNull('price_range')
            ->distinct()
            ->pluck('price_range')
            ->unique()
            ->sort();

        return view('home', compact('restaurants', 'discountedRestaurants', 'menus', 'priceRange', 'category'));
    }


    public function searchresult()
    {

        $restaurants = Restaurant::where('status', 1)->paginate(8);
        $menus = Menu::all();
        $category = Category::all();
        $priceRange = Restaurant::whereNotNull('price_range')
            ->distinct()
            ->pluck('price_range')
            ->unique()
            ->sort();

        return view('search-results', compact('restaurants', 'menus', 'priceRange', 'category'));
    }

    public function detail($id)
    {
        $restaurant = Restaurant::where('status', 1)->findOrFail($id);
        $menuIds = json_decode($restaurant->menu, true);
        $menus = Menu::whereIn('id', $menuIds)->get();
        // dd($menus);
        return view('restaurant-detail', compact('restaurant', 'menus'));
    }



    public function search(Request $request)
    {
        $priceRangedata = Restaurant::whereNotNull('price_range')
            ->distinct()
            ->pluck('price_range')
            ->unique()
            ->sort();
        $categorydata = Category::all();
        $query = $request->input('city');
        $checkIn = $request->input('check_in');
        $priceFrom = (float) $request->input('price_from');
        $priceTo = (float) $request->input('price_to');
        $category = $request->input('category');
        $smoking = $request->input('smoking');
        $date = new DateTime($checkIn);
        $dayOfWeek = $date->format('l');
        $dayId = DB::table('weeks')
            ->where('day_eg', $dayOfWeek)
            ->value('id');
        $restaurants = Restaurant::where('status', 1)
            ->when($query, function ($q) use ($query) {
                return $q->where('city', $query);
            })
            ->when($priceFrom && $priceTo, function ($q) use ($priceFrom, $priceTo) {
                if ($priceFrom == $priceTo) {
                    return $q->whereRaw('CAST(price_range AS DECIMAL(10,2)) = ?', [$priceFrom]);
                } else {
                    return $q->whereRaw('CAST(price_range AS DECIMAL(10,2)) BETWEEN ? AND ?', [$priceFrom, $priceTo]);
                }
            })
            ->when($category, function ($q) use ($category) {
                return $q->where('category_id', $category);
            })
            ->when(isset($smoking), function ($q) use ($smoking) {
                return $q->where('smoking', $smoking);
            })
            ->where(function ($q) use ($dayId) {
                $q->whereNull('closed_days')
                    ->orWhereJsonDoesntContain('closed_days', $dayId);
            })
            ->paginate(9);

        return view('search-results', compact(
            'restaurants',
            'query',
            'checkIn',
            'dayOfWeek',
            'priceFrom',
            'priceTo',
            'category',
            'smoking',
            'priceRangedata',
            'categorydata'
        ));
    }






    public function pricesearch(Request $request)
    {
        $query = $request->input('city');
        $checkIn = $request->input('check_in');
        $minPrice = intval($request->input('min_price', 0));
        $maxPrice = intval($request->input('max_price', 10000));
        $filterPrice = $request->input('filter_price', []);

        $restaurants = Restaurant::where('status', 1)
            ->when(!empty($query), function ($q) use ($query) {
                $q->where('city', 'LIKE', "%$query%");
            })
            ->when(!empty($filterPrice), function ($q) use ($filterPrice) {
                $q->where(function ($query) use ($filterPrice) {
                    foreach ($filterPrice as $range) {
                        list($min, $max) = explode('-', $range);
                        $query->orWhereBetween('price_range', [(int)$min, (int)$max]);
                    }
                });
            })
            ->when($minPrice !== null && $maxPrice !== null, function ($q) use ($minPrice, $maxPrice) {
                $q->whereBetween('price_range', [$minPrice, $maxPrice]);
            })
            ->paginate(9);
        // dd( $restaurants);


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
            ->when(!empty($query), function ($q) use ($query) {
                $q->where('city', 'LIKE', "%$query%");
            })
            ->when(!empty($filterPrice), function ($q) use ($filterPrice) {
                $q->where(function ($query) use ($filterPrice) {
                    foreach ($filterPrice as $range) {

                        if (strpos($range, '-') !== false) {
                            list($min, $max) = explode('-', $range);
                            if (is_numeric($min) && is_numeric($max)) {
                                $query->orWhereBetween('price_range', [(int)$min, (int)$max]);
                            }
                        }
                    }
                });
            })
            ->paginate(9);

        return view('search-results', compact('restaurants', 'query', 'checkIn', 'minPrice', 'maxPrice'));
    }



    public function allsearch(Request $request)
    {
        $query = $request->input('city');
        $restaurants = Restaurant::where('status', 1)
            ->when($query, function ($q) use ($query) {
                return $q->where('city', 'LIKE', "%{$query}%");
            })
            ->paginate(10);
        //   dd( $restaurants);
        return view('search-results', compact('restaurants', 'query'));
    }


    public function report()
    {
        $restaurants = Restaurant::select('restaurants.id', 'restaurants.name', DB::raw('COUNT(bookings.id) as order_count'))
            ->leftJoin('bookings', 'restaurants.id', '=', 'bookings.restaurant_id')
            ->groupBy('restaurants.id', 'restaurants.name')
            ->orderBy('order_count', 'DESC')
            ->get();


        return response()->json($restaurants);
    }



    public function reportuser()
    {

        $users = User::select('users.id', 'users.first_name', DB::raw('COUNT(bookings.id) as order_count'))
            ->leftJoin('bookings', 'users.id', '=', 'bookings.user_id')
            ->groupBy('users.id', 'users.first_name')
            ->orderBy('order_count', 'DESC')
            ->get();


        $usersWithOrders = $users->filter(function ($user) {
            return $user->order_count > 0;
        });


        return response()->json($usersWithOrders);
    }




    public function getCities()
    {
        // $cities = City::all();
        // return response()->json($cities);
    }


    public function notifynewupdate(Request $request)
    {

        $validated = $request->validate([
            'email' => 'required|email|unique:messages,email',
        ]);


        $message = Message::create([
            'email' => $validated['email'],
        ]);


        Mail::to($message->email)->send(new SubscriptionConfirmation($message));

        return response()->json([
            'status' => 'success',
            'message' => 'ご登録ありがとうございます！確認メールを送信しました',
        ]);
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
