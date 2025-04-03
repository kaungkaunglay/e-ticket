<?php

namespace App\Mail;

use App\Models\Booking;
use App\Models\Restaurant;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use PDF;

class BookingConfirmationAdmin extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $restaurant;
    public $user;
    public $pdf;

    /**
     * Create a new message instance.
     */
    public function __construct(Booking $booking, User $user, $pdf = null)
    {
        $this->booking = $booking;
        $this->user = $user;
        $this->restaurant = Restaurant::find($booking->restaurant_id);
        $this->pdf = $pdf;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        $mail = $this->subject('New Booking Notification')
                    ->view('emails.booking_confirmation_admin')
                    ->with([
                        'booking' => $this->booking,
                        'restaurant' => $this->restaurant,
                        'user' => $this->user,
                    ]);

        if ($this->pdf) {
            $mail->attachData($this->pdf->output(), "booking_{$this->booking->id}.pdf", [
                'mime' => 'application/pdf',
            ]);
        }

        return $mail;
    }
}