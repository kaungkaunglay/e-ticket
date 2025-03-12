<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Booking;
use App\Models\User;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
    public function favourite()
    {   
        // use App\Models\User;
        // use App\Models\Restaurant;
        // use App\Models\Favorite;
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
    
        return view('booking-detail', compact('restaurant', 'user'));
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

        return redirect()->route('booking.thankyou')->with('success', 'Your booking was successful!');
    }


    public function thankYou()
    {
        return view('thank-you');
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
