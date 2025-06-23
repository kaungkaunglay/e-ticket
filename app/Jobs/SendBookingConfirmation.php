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
use App\Mail\BookingConfirmation;

class SendBookingConfirmation implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $booking;
    protected $user;

    /**
     * Create a new job instance.
     *
     * @param Booking $booking
     * @param User $user
     */
    public function __construct(Booking $booking, User $user)
    {
        $this->booking = $booking;
        $this->user = $user;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        $restaurant = $this->booking->restaurant;
        
        $pdf = PDF::loadView('emails.booking_pdf', [
            'booking' => $this->booking,
            'user' => $this->user,
            'restaurant' => $restaurant
        ])
        ->setPaper('a4')
        ->setOption('defaultFont', 'Noto Sans JP')
        ->setOption('isRemoteEnabled', true)
        ->setOption('isHtml5ParserEnabled', true);

        Mail::to($this->user->email)
            ->send(new BookingConfirmation($this->booking, $this->user, $pdf));
    }
}
