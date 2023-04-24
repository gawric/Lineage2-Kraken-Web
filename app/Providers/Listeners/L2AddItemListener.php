<?php

namespace App\Providers\Listeners;

use App\Providers\Events\L2AddItem;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class L2AddItemListener
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
     * @param  \App\Providers\L2AddItem  $event
     * @return void
     */
    public function handle(L2AddItem $event)
    {
       // if (isset($event->order_item)) {
            info(" L2AddItemListener>>>>>>> ");
            //info(" L2AddItemListener>>>>>>> " . $event->order_item);
        //}
    }
}
