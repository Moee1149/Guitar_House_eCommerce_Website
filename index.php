<?php session_start();

//define base paths
define("APP_PATH", __DIR__ . '/app/');
define("VIEW_PATH", __DIR__ . '/app/views');

include APP_PATH . 'controllers/PublicController.php';
include APP_PATH . 'controllers/AuthController.php';

$login_status = $_SESSION['login_status'] ?? false;

//Decide which page to load
$controller = new PublicController();
$authController = new AuthController();

$path = $_SERVER['REQUEST_URI'];

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
        if (isset($_POST['submit'])) {
            $authController->handleCustomerLogin();
        } else {
            $authController->getCustomerLoginPage();
        }
        break;
    case '/register':
        if (!$login_status && isset($_POST['submit'])) {
            $authController->handleCustomerRegister();
            break;
        }

        if (!$login_status) {
            $authController->getCustomerRegisterPage();
            break;
        }
        header("location: /customer");
        break;
    case '/admin-login':
        $authController->getAdminLoginPage();
        break;
    case '/admin-register':
        $authController->getAdminRegisterPage();
        break;
    default:
        $controller->notFound();
        http_response_code(404);
        echo "Page not found";
        break;
}
