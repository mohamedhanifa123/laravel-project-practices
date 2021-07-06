<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Product;

class testmail extends Mailable
{
    use Queueable, SerializesModels;
    public $products;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Product $products)
    {
        $this->products($products);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('mohamedhanifa@integrass.com')
                    ->view('emails.testmail');

    }
}
