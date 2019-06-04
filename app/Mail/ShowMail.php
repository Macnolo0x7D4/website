<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ShowMail extends Mailable
{
    use Queueable, SerializesModels;
    public $msg;

    public function __construct($msg)
    {
        $this->msg = $msg;
    }

    public function build()
    {
        return $this->view('success');
    }
}
