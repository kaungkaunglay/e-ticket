<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Booking;
use App\Models\User;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingConfirmation;
use App\Mail\BookingConfirmationAdmin;
use PDF;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // public function detail(){
    //     return view('booking-detail');
    // }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function favourite(Request $request)
    {
        if (!Auth::check()) {
            return response()->json([
                'message' => 'ログインが必要です。'
            ], 401);
        }

        $request->validate([
            'restaurants_id' => 'required|exists:restaurants,id',
        ]);


        $existingFavorite = Favorite::where('user_id', Auth::id())
            ->where('restaurants_id', $request->restaurants_id)
            ->first();

        if ($existingFavorite) {
            return response()->json([
                'message' => 'このレストランはすでにお気に入りに追加されています。'
            ], 400);
        }


        $favorite = Favorite::firstOrCreate([
            'user_id' => Auth::id(),
            'restaurants_id' => $request->restaurants_id,
        ]);

        return response()->json([
            'message' => 'レストランがお気に入りに追加されました。',
            'favorite' => $favorite
        ], 201);
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to book a restaurant.');
        }
    
        $restaurant = Restaurant::where('status', 1)->findOrFail($id);
        $user = Auth::user();
        $selectedDate = request('date') ?: now()->format('Y-m-d');
        $currentTime = now()->format('H:i');
        $selectedDateTime = $selectedDate . ' ' . $currentTime;
        // dd($selectedDateTime);
        return view('booking-detail', compact('restaurant', 'user', 'selectedDate', 'selectedDateTime'));
    }


    public function booksave(Request $request)
    {    
        $request->validate([
            'restaurant_id' => 'required|exists:restaurants,id',
            'select_date' => 'required|date',
            'note' => 'nullable|string',
        ]);
    
        $booking = Booking::create([
            'restaurant_id' => $request->restaurant_id,
            'user_id' => Auth::id(),
            'select_date' => $request->select_date,
            'note' => $request->note,
        ]);
    
     
        $restaurant = Restaurant::find($request->restaurant_id);
        
 
        $pdf = PDF::loadView('emails.booking_pdf', [
            'booking' => $booking,
            'user' => Auth::user(),
            'restaurant' => $restaurant
        ]);
    

        Mail::to(Auth::user()->email)->send(new BookingConfirmation($booking, Auth::user(), $pdf));
        
      
        Mail::to('zwehtetnaing@andfun.biz')->send(new BookingConfirmationAdmin($booking, Auth::user(), $pdf));
    
        return redirect()->route('booking.thankyou')->with('success', 'Your booking was successful! A confirmation email has been sent.');
    }


    public function bookCancel(Request $request) 
{
    $request->validate([
        'id' => 'required|integer|exists:bookings,id',
    ]);
    $user_id = auth()->id();

    // Find Booking
    $booking = Booking::where('id', $request->id)
        ->where('user_id', $user_id)
        ->first();

    if (!$booking) {
        return response()->json([
            'success' => false,
            'message' => 'Booking not found or unauthorized'
        ], 404);
    }
    $booking->status = 1;
    $booking->save();

    return response()->json([
        'success' => true,
        'message' => 'Booking has been cancelled successfully',
        'booking' => $booking
    ], 200);
}


    public function thankYou()
    {
        return view('thank-you');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function remove(Request $request)
    {
        $validated = $request->validate([
            'restaurants_id' => 'required|exists:restaurants,id',
        ]);

        $user_id = Auth::id(); // Get the authenticated user's ID

        // Find the favorite record
        $favorite = Favorite::where('user_id', $user_id)
            ->where('restaurants_id', $validated['restaurants_id'])
            ->first();

        if (!$favorite) {
            return response()->json(['message' => 'Favorite not found.'], 404);
        }

        // Delete the favorite
        $favorite->delete();

        return response()->json(['message' => 'Favorite removed successfully.']);
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
