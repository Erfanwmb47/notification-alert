<?php

namespace erfanwmb\notificationAlert;

use Illuminate\Support\Facades\Session;

class NotificationAlertService
{

    /**
     * @param string|null $title
     * @param string|null $message
     * @param string|null $mode
     * @return void
     */
    public static function info(string $title = null, string $message = null, string $mode = null): void
    {
        Session::flash('notification-alert', [
            'type' => 'info',
            'mode' => $mode ?? config('notification-alert.notification.default'),
            'title' => $title,
            'message' => $message,
        ]);
    }

    /**
     * @param string|null $title
     * @param string|null $message
     * @param string|null $mode
     * @return void
     */
    public static function warning(string $title = null, string $message = null, string $mode = null): void
    {
        Session::flash('notification-alert', [
            'type' => 'warning',
            'mode' => $mode ?? config('notification-alert.notification.default'),
            'title' => $title,
            'message' => $message,
        ]);
    }


    /**
     * @param string|null $title
     * @param string|null $message
     * @param string|null $mode
     * @return void
     */
    public static function error(string $title = null, string $message = null, string $mode = null): void
    {
        Session::flash('notification-alert', [
            'type' => 'danger',
            'mode' => $mode ?? config('notification-alert.notification.default'),
            'title' => $title,
            'message' => $message,
        ]);
    }

    /**
     * @param string|null $title
     * @param string|null $message
     * @param string|null $mode
     * @return void
     */
    public static function success(string $title = null, string $message = null, string $mode = null): void
    {
        Session::flash('notification-alert', [
            'type' => 'success',
            'mode' => $mode ?? config('notification-alert.notification.default'),
            'title' => $title,
            'message' => $message,
        ]);
    }
}
