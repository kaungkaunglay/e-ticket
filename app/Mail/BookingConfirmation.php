<?php

namespace App\Mail;

use App\Models\Booking;
use App\Models\Restaurant;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;


class BookingConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $restaurant;
    public $user; 

    /**
     * Create a new message instance.
     */
    public function __construct(Booking $booking, User $user)
    {
        $this->booking = $booking;
        $this->user = $user; 
        $this->restaurant = Restaurant::find($booking->restaurant_id);
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Booking Confirmation')
                    ->view('emails.booking_confirmation')
                    ->with([
                        'booking' => $this->booking,
                        'restaurant' => $this->restaurant,
                        'user' => $this->user,  
                    ]);
    }
}

