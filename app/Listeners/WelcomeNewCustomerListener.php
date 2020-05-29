<?php

namespace App\Listeners;

use App\Mail\WelcomeNewUserMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class WelcomeNewCustomerListener implements ShouldQueue
{
    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    public function handle($event)
    {
        sleep(120);
        Mail::to($event->customer['email'])->send(new WelcomeNewUserMail());
    }
}
