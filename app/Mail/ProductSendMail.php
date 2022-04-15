<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProductSendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $product;
    public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($product, $message)
    {
        $this->product = $product;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.ProductSendEmail');
    }
}
