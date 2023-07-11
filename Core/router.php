<?php
namespace Core;
$routes = require base_path('routes.php');

function routeToControllers($url, $routes)
{
    if (array_key_exists($url, $routes)) require base_path($routes[$url]); 
    else abort();
}

$url =parse_url($_SERVER['REQUEST_URI'])['path'];
routeToControllers($url , $routes);