<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Redirect;

class RedirectAfterLogin
{
    /**
     * Handle the event.
     */
    public function handle(Login $event)
    {
        return Redirect::to('/booking');
    }
}
