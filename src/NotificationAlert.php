<?php

namespace erfanwmb\notificationAlert;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string toast()
 * @param string $type
 * @param string|null $title
 * @param string|null $message
 * @return void
 **/

/**
 * @method static string info()
 * @param string|null $title
 * @param string|null $message
 * @return void
**/

/**
 * @method static string warning()
 * @param string|null $title
 * @param string|null $message
 * @return void
 **/

/**
 * @method static string error()
 * @param string|null $title
 * @param string|null $message
 * @return void
 **/

/**
 * @method static string success()
 * @param string|null $title
 * @param string|null $message
 * @return void
 */

class NotificationAlert extends Facade

{
    protected static function getFacadeAccessor(): string
    {
        return NotificationAlertService::class;
    }
}
