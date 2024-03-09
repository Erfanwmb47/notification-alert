<?php

namespace erfanwmb\notificationAlert;

use Illuminate\Support\Facades\Facade;
/**
 * @method static string toast()
 * @method static string info()
 * @method static string warning()
 * @method static string danger()
 * @method static string success()
 */
class NotificationAlert extends Facade

{
    protected static function getFacadeAccessor(): string
    {
        return NotificationAlertService::class;
    }
}
