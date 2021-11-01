<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\App;
use PDF;

class UserRegistered extends Mailable
{
    use Queueable, SerializesModels;

    public $firstname;
    public $email;
    
    public function __construct($firstname, $email)
    {
        $this->firstname = $firstname;
        $this->email = $email;
    }

    public function build()
    {
        $data = [
            'firstname' => $this->firstname,
            'email' => $this->email
        ];
    
        return $this->from(config('mail.from.address'), config('app.name'))
                    ->subject(__('auth.user_registered_mail_title'))
                    ->markdown('base_emails.user_registered')
                    ->with($data);
    }
}
