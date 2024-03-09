<?php

namespace erfanwmb\notificationAlert;

use Illuminate\Support\Facades\Session;

class NotificationAlertService
{


    /**
     * @param string $type
     * @param string|null $title
     * @param string|null $message
     * @return void
     */
    public static function toast(string $type='info', string $title=null, string $message=null): void
    {
        Session::flash('notification-alert',[
            'type'      => $type,
            'title'     => $title,
            'message'   => $message,
            'mode'      => 'toastr'
        ]);
    }

    /**
     * @param string|null $title
     * @param string|null $message
     * @return void
     */
    public static  function info(string $title=null, string $message=null) :void
    {
        Session::flash('notification-alert',[
            'type'      => 'info',
            'mode'      => config('notification-alert.notification.default',),
            'title'     => $title,
            'message'   => $message,
        ]);
    }

    /**
     * @param string|null $title
     * @param string|null $message
     * @return void
     */
    public static  function warning(string $title=null, string $message=null) : void
    {
        Session::flash('notification-alert',[
            'type'      => 'warning',
            'mode'      => config('notification-alert.notification.default',),
            'title'     => $title,
            'message'   => $message,
        ]);
    }


    /**
     * @param string|null $title
     * @param string|null $message
     * @return void
     */
    public static  function error(string $title=null, string $message=null) : void
    {
        Session::flash('notification-alert',[
            'type'      => 'danger',
            'mode'      => config('notification-alert.notification.default',),
            'title'     => $title,
            'message'   => $message,
        ]);
    }

    /**
     * @param string|null $title
     * @param string|null $message
     * @return void
     */
    public static  function success(string $title=null, string $message=null) : void
    {
        Session::flash('notification-alert',[
            'type'      => 'success',
            'mode'      => config('notification-alert.notification.default',),
            'title'     => $title,
            'message'   => $message,
        ]);
    }
}
