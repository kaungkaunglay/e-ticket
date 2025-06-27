<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Booking;
use App\Models\User;

class BookingCancellation extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $user;
    public $restaurant;

    /**
     * Create a new message instance.
     *
     * @param Booking $booking
     * @param User $user
     * @param mixed $restaurant
     */
    public function __construct($booking, $user, $restaurant)
    {
        $this->booking = $booking;
        $this->user = $user;
        $this->restaurant = $restaurant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('予約がキャンセルされました - キャンセル通知')
                    ->view('emails.booking_cancellation');
    }
}
