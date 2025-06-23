<?php

namespace App\Jobs;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingConfirmationAdmin;

class SendAdminBookingNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $booking;
    protected $user;

    public function __construct(Booking $booking, User $user)
    {
        $this->booking = $booking;
        $this->user = $user;
    }

    public function handle()
    {
        $restaurant = $this->booking->restaurant;
        
        $pdf = PDF::loadView('emails.booking_pdf', [
            'booking' => $this->booking,
            'user' => $this->user,
            'restaurant' => $restaurant
        ])
        ->setOption('defaultFont', 'Noto Sans JP')
        ->setOption('isRemoteEnabled', true)
        ->setOption('isHtml5ParserEnabled', true);

        Mail::to('webdeveloperkkz@gmail.com')
            ->send(new BookingConfirmationAdmin($this->booking, $this->user, $pdf));
    }
}
