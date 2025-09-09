<?php

//define base paths
define("APP_PATH", __DIR__ . '/app/');
define("VIEW_PATH", __DIR__ . '/app/views');

include APP_PATH . 'controllers/PublicController.php';

//Decide which page to load
$controller = new PublicController();

$path = $_SERVER['PATH_INFO'] ?? '/';

switch ($path) {
    case '/':
        $controller->index();
        break;
    case '/product':
        $controller->product();
        break;
    case '/about':
        // $controller->about();
        break;
    case '/contact':
        // $controller->contact();
        break;
    default:
        $controller->notFound();
        http_response_code(404);
        echo "Page not found";
        break;
}
