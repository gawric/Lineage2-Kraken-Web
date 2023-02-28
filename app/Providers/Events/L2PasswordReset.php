<?php

namespace App\Providers\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Accounts_expansion;

class L2PasswordReset
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private Accounts_expansion $user_reset;

   
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user_reset)
    {
        $this->user_reset = $user_reset;
    }

    public function getObjectUser() : Accounts_expansion{
        return $this->user_reset;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
