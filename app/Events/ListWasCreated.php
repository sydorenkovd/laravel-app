<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ListWasCreated extends Event
{
    use SerializesModels;
    public $photo;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Photos $photo)
    {
        $this->photo = $photo;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
