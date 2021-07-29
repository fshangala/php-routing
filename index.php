<?php
include_once 'Request.php';
include_once 'Router.php';

$router = new Router(new Request);

$router->get('/', function(){
    return '';
});

$router->get('/home', function(){
    return <<<HTML
    <h1>Hello Home</h1>
    HTML;
});