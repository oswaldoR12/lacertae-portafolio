<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmergencyCallReceived extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
  
    public function __construct($_usuario)
    {
        $this->usuario = $_usuario;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
     {
        return $this->subject('Bienvenido(a) a Menssajero')
            ->view('emails.auth.register');
    }
}
