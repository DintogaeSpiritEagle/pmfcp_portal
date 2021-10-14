<?php
/**
 * File: config/ipg.php
 * Notes:
 * - This file will contain all the config vars of the IPG request / callback url endpoints
 */

use Illuminate\Support\Str;

return [
   'ipg_request_url_endpoint' => env('IPG_REQUEST_URL_ENDPOINT'),
   'ipg_callback_url_endpoint' => env('IPG_CALLBACK_URL_ENDPOINT'),
];
