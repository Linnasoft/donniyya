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

    public $comp;
    public $firstname;
    public $lastname;
    public $password;
    public $invoice;
    
    public function __construct($firstname)
    {
        $this->firstname = $firstname;
    }

    public function build()
    {
        $data = [
            'firstname' => $this->firstname
        ];
    
        return $this->from(config('mail.from.address'), config('app.name'))
                    ->subject('Création de votre compte '.config('app.name'))
                    ->markdown('base_emails.user_registered')
                    ->with($data);
    }
}
