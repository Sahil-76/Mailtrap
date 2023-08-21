<?php

 

namespace App\Events;

use App\Models\User;
use App\Mail\ProfileCheckedMail;

use Illuminate\Broadcasting\Channel;

use Illuminate\Support\Facades\Mail;

use Illuminate\Queue\SerializesModels;

use Illuminate\Broadcasting\PrivateChannel;

use Illuminate\Broadcasting\PresenceChannel;

use Illuminate\Foundation\Events\Dispatchable;

use Illuminate\Broadcasting\InteractsWithSockets;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SomeoneCheckedProfile

{

    use Dispatchable, InteractsWithSockets, SerializesModels;

    public User $user;

 public function __construct(User $user)
 {
    $this->user = $user;
 }

// public function handle()
// {
//     Mail::to( $this->user->email)->send(new ProfileCheckedMail($this->user));
// }

 

    /**

     * Get the channels the event should broadcast on.

     *

     * @return array<int, \Illuminate\Broadcasting\Channel>

     */


}

 