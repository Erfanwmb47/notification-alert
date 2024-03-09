<?php
return [


/*
|--------------------------------------------------------------------------
| alert notification
|--------------------------------------------------------------------------
|
|
|
|
|
|
|
|
|    TODO inja ro dorost kon
*/


    'notification'=>[

        'default'=>env('NOTIFICATION_ALERT_TYPE','toastr'),
        //notification modes : (toaster,sweetalert,adminlte toast)
        /**
         * type of notification- alert :
         * 1.toastr
         * 2.sweetalert
         * 3.adminlte toast
         */
    ],
    'toastr'=>[
        'closeButton'       => true,
        'debug'             => false,
        'newestOnTop'       => true,
        'progressBar'       => true,
        'positionClass'     => 'toast-bottom-right',
        'preventDuplicates' => false,
        'showDuration'      => '300',
        'hideDuration'      => '1000',
        'timeOut'           => '5000',
        'extendedTimeOut'   => '1000',
        'showEasing'        => 'swing',
        'hideEasing'        => 'linear',
        'showMethod'        => 'fadeIn',
        'hideMethod'        => 'fadeOut',
    ],


];
