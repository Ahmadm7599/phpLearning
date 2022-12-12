<?php
$routes = require("routes.php");

function routeToControllers($url, $routes)
{
    if (array_key_exists($url, $routes)) require($routes[$url]); 
    else abort();
}
$url =parse_url($_SERVER['REQUEST_URI'])['path'];
routeToControllers($url , $routes);