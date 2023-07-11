<?php
use Core\Response;
function dd($v)
{
    echo '<pre>';
    var_dump($v);
    echo '</pre>';
    die();  
}
function UrlIS($url)
{
    return $_SERVER['REQUEST_URI'] === $url;
}
function abort($statusCode = 404)
{
    http_response_code($statusCode);
    require base_path("views/{$statusCode}.php");
    die();
}
function autorized($conditin , $statusCode = Response::FORBBIDEN)
{
    if (!$conditin)
    {
        abort($statusCode);
    }
    return true;
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('views/' . $path);
}