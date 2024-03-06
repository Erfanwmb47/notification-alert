<?php

namespace erfanwmb\alert;

use Illuminate\Support\ServiceProvider;

class NotificationAlertProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('notificationAlert',function (){
            //return new
        });
    }
}
