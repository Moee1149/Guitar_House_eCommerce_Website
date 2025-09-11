<?php session_start();

//define base paths
define("APP_PATH", __DIR__ . '/app/');
define("VIEW_PATH", __DIR__ . '/app/views');

include APP_PATH . 'controllers/PublicController.php';
include APP_PATH . 'controllers/AuthController.php';
include APP_PATH . 'controllers/CustomerController.php';

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
        header("location: /customer/dashboard");
        break;
    case '/admin-login':
        if (isset($_POST['submit'])) {
            $authController->handleAdminLogin();
        } else {
            $authController->getAdminLoginPage();
        }
        break;
    case '/admin-register':
        if (!$login_status && isset($_POST['submit'])) {
            $authController->handleAdminRegister();
            break;
        }

        if (!$login_status) {
            $authController->getAdminRegisterPage();
            break;
        }
        header("location: /admin/dashboard");
        break;
    case '/customer/cart':
        if (!$login_status) {
            header("location: /login");
            exit;
        }
        $customer = new CustomerController();
        $customer->showCartPage();
        break;
    case '/customer/checkout':
        if (!$login_status) {
            header("location: /login");
            exit;
        }
        $customer = new CustomerController();
        $customer->showCheckoutPage();
        break;
    case '/customer/payment':
        if (!$login_status) {
            header("location: /login");
            exit;
        }
        $customer = new CustomerController();
        $customer->showPaymentPage();
        break;
    case '/customer/thankyou':
        if (!$login_status) {
            header("location: /login");
            exit;
        }
        $customer = new CustomerController();
        $customer->showThankyouPage();
        break;
    default:
        $controller->notFound();
        http_response_code(404);
        echo "Page not found";
        break;
}
