<?php

namespace App\Mail;
use Illuminate\Mail\Mailable;

class Forgotpassword extends Mailable
{
    public $email;

    public $subject;

    public $token;

    /**
     * @param $email
     * @param $token
     * @param $subject
     */
    public function __construct($email, $token, $subject)
    {
        $this->email = $email;
        $this->subject = $subject;
        $this->token = $token;
    }

    public function build()
    {
        return $this
            ->subject($this->subject)
            ->with([
                'url' =>  url("/recoveryPassword?tokenId=".$this->token)
        ])
            ->view('emails.forgotpassword');
    }
}
