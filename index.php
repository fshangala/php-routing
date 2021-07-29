<?php
include_once 'Request.php';
include_once 'Router.php';

$router = new Router(new Request);

$router->get('/', function(){
    return <<<HTML
    <h1>Hello world</h1>
    HTML;
});

$router->get('/home', function(){
    return <<<HTML
    <h1>Hello Home</h1>
    HTML;
});