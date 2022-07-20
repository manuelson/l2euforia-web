<?php

namespace App\Mail;
use Illuminate\Mail\Mailable;

class Test extends Mailable
{
    public $email;

    public $subject;

    /**
     * @param $email
     * @param $subject
     */
    public function __construct($email, $subject)
    {
        $this->email = $email;
        $this->subject = $subject;
    }

    public function build()
    {
        return $this
            ->subject($this->subject)
            ->markdown('emails.test');
    }
}
