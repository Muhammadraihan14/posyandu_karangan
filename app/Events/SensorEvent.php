<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SensorEvent implements shouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $tinggi;
    public $berat;
    public $imt;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($tinggi,$berat,$imt)
    {
        $this->tinggi = $tinggi;
        $this->berat = $berat;
        $this->imt = $imt;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        // return new PrivateChannel('channel-name');
        return new Channel(name : 'posyandu');
    }
    public function broadcastAs()
    {
        return 'new-request';
    }
}
