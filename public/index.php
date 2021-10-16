<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| First we need to get an application instance. This creates an instance
| of the application / container and bootstraps the application so it
| is ready to receive HTTP / Console requests from the environment.
|
*/

$app = require __DIR__ . '/../bootstrap/app.php';


/*
|--------------------------------------------------------------------------
| Config for Deplay share hosting
|--------------------------------------------------------------------------
|
| uncommnet code dibawah untuk shared hosting mode
| dan Pindahkan file yang ada di folder public ke luar (ke folder utama / document root)
|
*/

// $app = require __DIR__.'/bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$app->run();
