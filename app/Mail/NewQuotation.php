<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewQuotation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
          $this->quotation = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->quotation->type == 'sponsorship') {
          $this->markdown('emails.quotation.sponsorship');
        }

        if ($this->quotation->type == 'conference') {
          $this->markdown('emails.quotation.conference');
        }

        return $this->subject('Novo Orçamento')
          ->with([
            'user' => $this->quotation->user,
            'quotation' => $this->quotation,
          ]);
    }
}
