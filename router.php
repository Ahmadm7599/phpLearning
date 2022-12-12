<?php
$url =parse_url($_SERVER['REQUEST_URI'])['path'];

$routes =[
'/' => "controllers/index.php",
'/about' => "controllers/about.php",
'/contact' => "controllers/contact.php",
'/notes' => "controllers/notes.php",
'/note' => "controllers/note.php",
];
function routeToControllers($url, $routes)
{
if (array_key_exists($url, $routes)) require($routes[$url]); 
else abort();
}

routeToControllers($url , $routes);