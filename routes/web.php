<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->get('/user/{slug}', "UserController@index");

$router->get('/', function () {
    $html = <<<HTML
    <h1> lumen minimal config </h1>
    <a href='user/1'>url lain</a>
    HTML;
    echo $html;
});
