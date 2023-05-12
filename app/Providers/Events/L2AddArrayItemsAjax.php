<?php

namespace App\Providers\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class L2AddArrayItemsAjax
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $arrayData;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($arrayDataNew)
    {
        $this->arrayData = $arrayDataNew;
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
