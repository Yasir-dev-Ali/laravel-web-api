<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check for Maintenance Mode
|--------------------------------------------------------------------------
|
| If the application is in maintenance or update mode, a maintenance
| file will be present. This allows you to display a friendly
| maintenance page without bootstrapping the entire framework.
|
*/
if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
    exit;
}

/*
|--------------------------------------------------------------------------
| Register The Composer Autoloader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! It will handle
| autoloading our application's classes as well as any packages.
|
*/
require __DIR__ . '/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Bootstrap The Laravel Application
|--------------------------------------------------------------------------
|
| This bootstraps the Laravel framework and prepares it for handling
| incoming requests from the web server or console. We will then
| pass the request to the kernel and send the response back.
|
*/

/** @var Application $app */
$app = require_once __DIR__ . '/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Handle The Incoming Request
|--------------------------------------------------------------------------
|
| This line captures the current HTTP request from PHP’s superglobals
| and passes it to the Laravel application, which routes it through
| the middleware stack and sends the appropriate response.
|
*/
$app->handleRequest(Request::capture());
