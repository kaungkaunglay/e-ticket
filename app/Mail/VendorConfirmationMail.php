<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;

class VendorConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $vendor;
    public $promoCode;
    public $expiresAt; 
    public $confirmationToken;

    public function __construct($vendor, $promoCode,$confirmationToken)
    {
        $this->vendor = $vendor;
        $this->promoCode = $promoCode;
        $this->expiresAt = Carbon::now()->addMonths(2)->format('Y-m-d'); 
        $this->confirmationToken = $confirmationToken;
    }

    public function build()
    {
        return $this->subject('Confirm Your Vendor Registration')
            ->view('emails.vendor_confirmation')
            ->with([
                'name' => $this->vendor->first_name,
                'promoCode' => $this->promoCode,
                'expiresAt' => $this->expiresAt, 
                'confirmationLink' => route('confirm', ['token' => $this->confirmationToken]),
            ]);
        }
    }