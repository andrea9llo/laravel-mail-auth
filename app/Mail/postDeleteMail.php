<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class postDeleteMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     private $nomepost;
     private $nomecate;
    public function __construct($nomepost, $nomecate)
    {
      $this -> nomepost = $nomepost;
      $this -> nomecate = $nomecate;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $nomepost = $this -> nomepost;
        $nomecate = $this -> nomecate;
        return $this->view('mail.deletePost', compact('nomepost','nomecate'));
    }
}
