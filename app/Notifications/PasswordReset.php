<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PasswordReset extends Notification
{
    use Queueable;
    public $token;
    public $firstname;
    public $email;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($firstname,$email,$token)
    {
        $this->token = $token;
        $this->firstname = $firstname;
        $this->email = $email;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                ->subject('Réinitialisation du mot de passe')
                ->greeting('Salut '.$this->firstname.',')
                ->line('Une demande de réinitialisation de votre mot de passe a été soumise ! Pour réinitialiser votre mot de passe, cliquez sur le bouton suivant :')
                ->action('Réinitialiser mon mot de passe', url('/reinitialisation-mot-de-passe/'.$this->token.'/'.$this->email))
                ->line('Si vous n\'êtes pas à l\'origine de cette demande, vous pouvez ignorer ce mail.')
                /*->markdown('pages.utilisateurs.passwordreset')*/;
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
