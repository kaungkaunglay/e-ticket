<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Models\User;
use App\Models\Booking;
use App\Models\Restaurant;
use App\Models\Favorite;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\PromotionCode;
use Illuminate\Support\Facades\Auth;
use App\Mail\VendorConfirmationMail;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.dashboard');
    }
    
        public function show()
        {
            $user = Auth::user();
            $favorites = Favorite::select('favorites.*', 'restaurants.*') 
                ->where('favorites.user_id', $user->id)
                ->join('restaurants', 'favorites.restaurants_id', '=', 'restaurants.id')
                ->get();

                // dd($favorites);
            $bookings = Booking::select('bookings.*', 'restaurants.name as restaurant_name', 'restaurants.address as restaurant_address') 
                        ->where('bookings.user_id', $user->id)
                        ->join('restaurants', 'bookings.restaurant_id', '=', 'restaurants.id') 
                        ->get();
            return view('user.dashboard', compact('user', 'bookings','favorites'));
        }

        public function adminbooking()
        {
            $bookings = Booking::select('bookings.*', 'restaurants.name as restaurant_name', 'restaurants.address as restaurant_address', 'restaurants.city', 'restaurants.phone_number', 'restaurants.price_range', 'restaurants.website_url')
                                ->join('restaurants', 'bookings.restaurant_id', '=', 'restaurants.id') 
                                ->get();
        
            return view('resturant.booking', compact('bookings'));
        }

        


    
    public function profileupdate(Request $request)
{
   
    $validator = Validator::make($request->all(), [
        'id' => 'required|exists:users,id', 
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'email' => 'required|email|max:255|unique:users,email,' . $request->id, 
        'postal_code' => 'nullable|string|max:20',  
        'address' => 'nullable|string|max:255',     
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Validation errors',
            'errors' => $validator->errors()
        ], 422);
    }


    $user = User::find($request->id);

    if (!$user) {
        return response()->json([
            'success' => false,
            'message' => 'User not found',
        ], 404);
    }


    $user->first_name = $request->first_name;
    $user->last_name = $request->last_name;
    $user->phone = $request->phone;
    $user->email = $request->email;
    

    if ($request->has('postal_code')) {
        $user->postal_code = $request->postal_code;
    }

    if ($request->has('address')) {
        $user->address = $request->address;
    }
    
    $user->save(); 

    return response()->json([
        'success' => true,
        'message' => 'Profile updated successfully',
        'user' => $user
    ], 200);
}


public function userpassword(Request $request) {
    $request->validate([
        'id' => 'required|exists:users,id',  
        'old_password' => 'required|string', 
        'new_password' => 'required|string|min:8|confirmed', 
    ]);
    $user = User::find($request->id);
    if (!\Hash::check($request->old_password, $user->password)) {
        return response()->json([
            'status' => 'error',
            'message' => 'The provided old password is incorrect.'
        ], 400);
    }
    $user->password = \Hash::make($request->new_password);
    $user->save(); 

    return response()->json([
        'status' => 'success',
        'message' => 'Password updated successfully!'
    ], 200); 

}

    
    
public function userlist()
{
    $users = User::whereHas('roles', function ($query) {
        $query->where('role_id', 3);
    })->paginate(10); 
    return view('resturant.userlist', compact('users'));
}

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
