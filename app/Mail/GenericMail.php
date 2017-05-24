<?php

namespace App\Mail;

use App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class GenericMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     */
    public $message;
    public $contactName;
    
    /*
     * @var emails
     */
    public function __construct($message, $contactName)
    {
        $this->name = $contactName;  
        $this->message = $message;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->view('mails.template')
                    ->with([
                        'emailMsg' => $this->message,
                        'emailName' => $this->name,
                    ]);
    }
}
