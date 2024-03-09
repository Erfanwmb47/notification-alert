<?php

namespace erfanwmb\notificationAlert;

use Illuminate\Support\ServiceProvider;

class NotificationAlertProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton('NotificationAlert',function (){
            return new NotificationAlertService();
        });

        $this->mergeConfigFrom(__DIR__.'\\..\\config\notification-alert.php','notification-alert');

    }

    public function boot(): void
    {

        $this->loadViewsFrom(__DIR__.'\\..\\resources\view','notification-alert');

        $this->publishes([
            __DIR__.'\\..\\config\notification-alert.php' => config_path('notification-alert.php'),
        ],'config');

    }
}
