<?php

namespace erfanwmb\notificationAlert;

use Illuminate\Support\Facades\Facade;
/**
 * @method static string toast()
 *
 */
class NotificationAlert extends Facade

{
    protected static function getFacadeAccessor(): string
    {
        return NotificationAlertService::class;
    }
}
