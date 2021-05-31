<?php

namespace App\Listeners;

use App\Events\eventregister;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendMailWhenUserRegister
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    public function handle(eventregister $event)
    {
        $msg = "welcome!!" . $event->data['name'];
        Mail::to($event->data['email'])->send(new SendMail($msg));
    }
}
