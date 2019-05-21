<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageReceived extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = 'Soporte';
    public $msg;

    public function __construct($msg)
    {
        $this->msg = $msg;
    }
    
    public function build()
    {
        return $this->view('mail');
    }
}
