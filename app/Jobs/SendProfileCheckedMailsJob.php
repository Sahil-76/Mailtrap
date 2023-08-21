<?php

namespace App\Jobs;

use App\Events\SomeoneCheckedProfile;
use App\Mail\ProfileCheckedMail;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class SendProfileCheckedMailsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     * 
     */

     public User $user;
    public function __construct(User $user)
    {
        //
        $this->user=$user;
        //dd($this->user);
    }

    /**
     * Execute the job.
     */
    public function handle(SomeoneCheckedProfile $event): void
    {


        
         Mail::to($this->user->email)->send(new ProfileCheckedMail($this->user));
    }
}
