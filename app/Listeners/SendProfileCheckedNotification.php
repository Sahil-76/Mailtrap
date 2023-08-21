<?php

namespace App\Listeners;

use App\Events\SomeoneCheckedProfile;
use App\Jobs\SendProfileCheckedMailsJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendProfileCheckedNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SomeoneCheckedProfile $event): void
    {
        //
        $delay=now()->addSecond(value:3);
        SendProfileCheckedMailsJob::dispatch($event->user)->delay($delay);
    }
}
