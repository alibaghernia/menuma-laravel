<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Filament\Notifications\Notification as BaseNotification;

class CallWaiterNotification extends BaseNotification
{
    public function __construct(string $id)
    {
        parent::__construct($id);
//        dump('sssssssssssssss'.uniqid());
    }

//    protected string $view = 'livewire.notifications';





}
