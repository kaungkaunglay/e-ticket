<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Booking;
use App\Models\User;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use App\Mail\BookingConfirmation;
use App\Mail\BookingConfirmationAdmin;
use Illuminate\Support\Facades\Session;

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
        $validator = Validator::make(request()->all(), [
            'date' => 'required|date|after_or_equal:today',
            'hour' => 'required|integer|between:'.$restaurant->opening_time.','.$restaurant->closing_time,
            'minute' => 'required|in:00,15,30,45',
            'people' => 'required|integer|min:1|max:10'
        ]);
    
        // if ($validator->fails()) {
        //     return redirect()->back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }
    
        $selectedDate = request('date');
        $hour = str_pad(request('hour', '12'), 2, '0', STR_PAD_LEFT); // Default to 12 if not provided
        $minute = request('minute', '00'); // Default to 00 if not provided
        $people = request('people', '1'); // Default to 1 if not provided
        
        // Ensure the time is properly formatted with single colons
        $selectedDateTime = "{$selectedDate} {$hour}:{$minute}:00";
    
        return view('booking-detail', compact('restaurant', 'user', 'selectedDate', 'selectedDateTime', 'people'));
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
     

    // Generate PDF for user
    $userPdf = PDF::loadView('emails.booking_pdf', [
            'booking' => $booking,
            'user' => Auth::user(), 
            'restaurant' => $restaurant
        ])
        ->setPaper('a4')
        ->setOption('defaultFont', 'Noto Sans JP')
        ->setOption('isRemoteEnabled', true)
        ->setOption('fontDir', public_path('assets/fonts/NotoSanJP/'))
        ->setOption('fontCache', storage_path('fonts/'))
        ->setOption('isHtml5ParserEnabled', true);

    // Generate separate PDF for admin
    $adminPdf = PDF::loadView('emails.booking_pdf', [
            'booking' => $booking,
            'user' => Auth::user(), 
            'restaurant' => $restaurant
        ])
        ->setPaper('a4')
        ->setOption('defaultFont', 'Noto Sans JP')
        ->setOption('isRemoteEnabled', true)
        ->setOption('fontDir', public_path('assets/fonts/NotoSanJP/'))
        ->setOption('fontCache', storage_path('fonts/'))
        ->setOption('isHtml5ParserEnabled', true);

    
        Mail::to(Auth::user()->email)->send(new BookingConfirmation($booking, Auth::user(), $userPdf));

        Mail::to('webdeveloperkkz@gmail.com')->send(new BookingConfirmation($booking, Auth::user(), $adminPdf));

    return redirect()->route('booking.thankyou')->with('success', 'Your booking was successful! A confirmation email has been sent.');
}


    /**
     * Set booking date in session
     */
    public function setSession(Request $request)
    {
        try {
            $validated = $request->validate([
                'date' => 'required|date_format:Y-m-d',
                'restaurant_id' => 'required|exists:restaurants,id'
            ]);

            // Store in session
            Session::put('booking_date', $validated['date']);
            Session::put('restaurant_id', $validated['restaurant_id']);

            return response()->json([
                'success' => true,
                'message' => 'Booking date set in session',
                'date' => $validated['date']
            ]);
        } catch (\Exception $e) {
            Log::error('Error setting booking session: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Failed to set booking date'
            ], 500);
        }
    }

    /**
     * Cancel a booking
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function bookCancel(Request $request) 
    {
        $request->validate([
            'id' => 'required|integer|exists:bookings,id',
        ]);
        
        /** @var \App\Models\User $user */
        $user = auth()->user();
        
        /** @var Booking $booking */
        $booking = Booking::with('restaurant')
            ->where('id', $request->id)
            ->where('user_id', $user->id)
            ->first();

        if (!$booking) {
            return response()->json([
                'success' => false,
                'message' => 'Booking not found or unauthorized'
            ], 404);
        }
        
        // Update booking status to cancelled
        $booking->status = 1;
        $booking->save();

        try {
            // Send cancellation email to admin
            Mail::to('webdeveloperkkz@gmail.com')
                ->send(new \App\Mail\BookingCancellation($booking, $user, $booking->restaurant));
                
            // Send confirmation to user
            Mail::to($user->email)
                ->send(new \App\Mail\BookingCancellation($booking, $user, $booking->restaurant));
                
        } catch (\Exception $e) {
            // Log the error but don't fail the request
            Log::error('Failed to send cancellation email: ' . $e->getMessage());
        }

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
