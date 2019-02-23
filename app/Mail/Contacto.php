<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contacto extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datos)
    {
        $this->datos = $datos;
        $this->email_contactante = $datos['email'];
        $this->name = $datos['nombre'];
        $this->subject = $datos['asunto'];
        $this->to_email = env('MAIL_USERNAME');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contacto')
            ->to($this->to_email)
            ->from($this->email_contactante, $this->name)
            ->replyTo($this->email_contactante, $this->name)
            ->subject($this->subject)
            ->with('datos', $this->datos);
    }
}
