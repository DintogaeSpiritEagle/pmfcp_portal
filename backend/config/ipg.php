<?php
/**
 * File: config/ipg.php
 * Notes:
 * - This file will contain all the config vars of the IPG request / callback url endpoints
 */

use Illuminate\Support\Str;

return [
   'bspipg_request_url_endpoint' => env('BSP_IPG_REQUEST_URL_ENDPOINT'),
   'bspipg_callback_url_endpoint' => env('BSP_IPG_CALLBACK_URL_ENDPOINT'),
];
