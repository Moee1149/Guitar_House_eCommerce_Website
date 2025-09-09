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
        if (isset($_GET['id'])) {
            $controller->product($_GET['id']);
        } else {
            $controller->productList();
        }
        break;
    case '/contact':
        $controller->contact();
        break;
    case '/categories':
        $controller->categories();
        break;
    case '/login':
        $controller->customerLogin();
        break;
    case '/register':
        $controller->customerRegister();
        break;
    case '/admin-login':
        $controller->adminLogin();
        break;
    case '/admin-register':
        $controller->adminRegister();
        break;
    default:
        $controller->notFound();
        http_response_code(404);
        echo "Page not found";
        break;
}
