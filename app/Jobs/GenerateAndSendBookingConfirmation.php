<?php

namespace App\Jobs;

use PDF;
use Mail;
use App\Mail\BookingConfirmation;
use App\Mail\BookingConfirmationAdmin;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GenerateAndSendBookingConfirmation implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $bookingId;
    protected $userEmail;
    protected $adminEmail;
    protected $pdfData;

    public function __construct($bookingId, $userEmail, $adminEmail, $pdfData)
    {
        $this->bookingId = $bookingId;
        $this->userEmail = $userEmail;
        $this->adminEmail = $adminEmail;
        $this->pdfData = $pdfData;
    }

    public function handle()
    {
        try {
            $bookingPdf = PDF::loadView('emails.booking_pdf', $this->pdfData)
                ->setPaper('a4')
                ->setOption('defaultFont', 'Noto Sans JP')
                ->setOption('isRemoteEnabled', true)
                ->setOption('fontDir', public_path('assets/fonts/NotoSanJP/'))
                ->setOption('fontCache', storage_path('fonts/'))
                ->setOption('isHtml5ParserEnabled', true);

            // Send to user
            Mail::to($this->userEmail)
                ->send(new BookingConfirmation($this->pdfData['booking'], $this->pdfData['user'], $bookingPdf));

            // Send to admin
            Mail::to($this->adminEmail)
                ->send(new BookingConfirmationAdmin($this->pdfData['booking'], $this->pdfData['user'], $bookingPdf));

        } catch (\Exception $e) {
            \Log::error('Failed to process booking email: ' . $e->getMessage());
            $this->fail($e);
        }
    }
}