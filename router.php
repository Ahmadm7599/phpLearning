<?php
$url =parse_url($_SERVER['REQUEST_URI'])['path'];

/* first way to routing */
// if($url=="/")
// require("controls/index.php");
// elseif($url=='/about')
// require("controllers/about.php");
// elseif($url == '/contact')
// require("controllers/contact.php");
// else http_response_code(404);

/* second way to routing */
$routes =[
'/' => "controllers/index.php",
'/about' => "controllers/about.php",
'/contact' => "controllers/contact.php",
];
function routeToControllers($url, $routes)
{
if (array_key_exists($url, $routes)) {
require($routes[$url]);
} else {
abort();
}
}

routeToControllers($url , $routes);