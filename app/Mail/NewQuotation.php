<?php

namespace App\Mail;

use Carbon\Carbon;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewQuotation extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $quotation;
    public $context;

    public function __construct($data)
    {
          $this->quotation = $data['quotation'];
          $this->context   = $data['context'];
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

        $subject = "Novo Orçamento - {$this->quotation->category->name}";

        if ($this->context == 'zodiac' && $this->quotation->type == 'sponsorship') {
          $subject = "seu pedido foi transmitido para departamento de 'Patrocíonios Zodiac/Grupo Power";
        }

        if ($this->context == 'zodiac' && $this->quotation->type == 'conference') {
          $subject = "seu pedido foi transmitido para o Grupo Power";
        }

        return $this->subject($subject)
          ->with([
            'user'         => $this->quotation->user,
            'quotation'    => $this->quotation,
            'context'      => $this->context,
            'request_date' => Carbon::now()->toDateString()
          ]);
    }
}
