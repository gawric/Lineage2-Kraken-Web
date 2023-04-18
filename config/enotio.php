<?php

return [

    /*
     * Project`s id
     */
    'project_id' => env('ENOTIO_PROJECT_ID', '21'),

    /*
     * First project`s secret key
     */
    'secret_key' => env('ENOTIO_SECRET_KEY', '23123123123123'),

    /*
     * Second project`s secret key
     */
    'secret_key_second' => env('ENOTIO_SECRET_KEY_SECOND', '123123123123'),

    /*
     * Allowed currenc'ies https://enot.io/knowledge/first-payment#pay_form
     *
     * If currency = null, that parameter doesn`t be setted
     */
    'currency' => null,

    /*
     *  SearchOrder
     *  Search order in the database and return order details
     *  Must return array with:
     *
     *  _orderStatus
     *  _orderSum
     */
    'searchOrder' => 'App\Http\Controllers\Payments\EnotIoController@searchOrder', //  'App\Http\Controllers\EnotIoController@searchOrder',

    /*
     *  PaidOrder
     *  If current _orderStatus from DB != paid then call PaidOrderFilter
     *  update order into DB & other actions
     */
    'paidOrder' => 'App\Http\Controllers\Payments\EnotIoController@paidOrder', //  'App\Http\Controllers\EnotIoController@paidOrder',

    /*
     * Customize error messages
     */
    'errors' => [
        'validateOrderFromHandle' => 'Validate Order Error',
        'searchOrder' => 'Search Order Error',
        'paidOrder' => 'Paid Order Error',
    ],

    /*
     * Url to init payment on EnotIo
     * https://enot.io/knowledge/first-payment#pay_form
     */
    'pay_url' => 'https://enot.io/pay',

    /*
     * URL where to redirect the user after successful payment.
     * (If empty, the value is taken from the store settings.
     *  This parameter is in priority for redirection)
     * куда перенаправить после успешной оплаты
     */
    'success_url' => null,
    /*
     * URL where to redirect the user after error payment.
     * (If empty, the value is taken from the store settings.
     *  This parameter is in priority for redirection)
     */
    'fail_url' => null,
];
