<?php

namespace erfanwmb\notificationAlert;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string info(string $title = null, string $message = null, string $mode = null)
 * @method static string warning(string $title = null, string $message = null, string $mode = null)
 * @method static string error(string $title = null, string $message = null, string $mode = null)
 * @method static string success(string $title = null, string $message = null, string $mode = null)
 **/


class NotificationAlert extends Facade

{
    protected static function getFacadeAccessor(): string
    {
        return NotificationAlertService::class;
    }
}
