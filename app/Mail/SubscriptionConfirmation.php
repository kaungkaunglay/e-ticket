<?php

namespace App\Mail;

use App\Models\Message;  // Use App\Models\Message
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscriptionConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $message;

    /**
     * Create a new message instance.
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
    }
    
    public function build()
    {
        return $this->subject('Subscription Confirmation')
                    ->view('emails.subscription_confirmation')
                    ->with([
                        'email' => $this->message->email,
                    ]);
    }
}
