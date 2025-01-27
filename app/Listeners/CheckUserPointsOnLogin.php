<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;

class CheckUserPointsOnLogin
{
    /**
     * Handle the event.
     */
    public function handle(Login $event)
    {
        $user = $event->user;

        // Controleer en verplaats punten indien nodig
        $user->checkAndTransferPoints();
    }
}

