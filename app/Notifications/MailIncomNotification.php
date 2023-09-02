<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MailIncomNotification extends Notification
{
    use Queueable;

    public $notificate;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($notificate)
    {
        $this->notificate = $notificate;
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

    public function toMail($notificate)
    {
        return (new MailMessage)
            ->greeting('Привет!')
            ->line('Вы получили новую заявку с сайта Robo_School')
            ->action('Перейти на сайт', url('/'))
            /* ->line("Данные с заявки:")
            ->line("-- Имя -- {$this->notificate->name}")
            ->line("-- Телефон -- {$this->notificate->phone}")
            ->line("-- Email -- {$this->notificate->email}")
            ->line("-- Интересующая услуга -- {$this->notificate->interesting}")
            ->line("-- Сообщение -- {$this->notificate->messsage}") */;
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
