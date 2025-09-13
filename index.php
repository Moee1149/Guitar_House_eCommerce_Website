<?php session_start();

// addd role for login

//define base paths
define("APP_PATH", __DIR__ . '/app/');
define("VIEW_PATH", __DIR__ . '/app/views');
define("UPLOAD_DIR", __DIR__ . "/public/images/products");

include APP_PATH . 'controllers/PublicController.php';
include APP_PATH . 'controllers/AuthController.php';
include APP_PATH . 'controllers/CustomerController.php';
include APP_PATH . 'controllers/AdminController.php';
include APP_PATH . 'core/connection.php';

$database = new DatabaseConnection();
$conn = $database->handleConnection();

$login_status = $_SESSION['login_status'] ?? false;

//Decide which page to load
$controller = new PublicController();
$authController = new AuthController($conn);
$customer = new CustomerController($conn);
$admin = new AdminController($conn);

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

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
        $customer->showCartPage();
        break;
    case '/customer/checkout':
        if (!$login_status) {
            header("location: /login");
            exit;
        }
        $customer->showCheckoutPage();
        break;
    case '/customer/payment':
        if (!$login_status) {
            header("location: /login");
            exit;
        }
        $customer->showPaymentPage();
        break;
    case '/customer/thankyou':
        if (!$login_status) {
            header("location: /login");
            exit;
        }
        $customer->showThankyouPage();
        break;
    case "/customer/dashboard":
        if (!$login_status) {
            header("location: /login");
            exit;
        }
        $customer->showCustomerDashboard();
        break;
    case "/customer/report":
        if (!$login_status) {
            header("location: /login");
            exit;
        }
        $customer->showCustomerReport();
        break;
    case "/customer/profile":
        if (!$login_status) {
            header("location: /login");
            exit;
        }
        $customer->showCustomerProfile();
        break;
    case "/admin/dashboard":
        if (!$login_status) {
            header("location: /admin-login");
            exit;
        }
        $admin->showAdminDashboard();
        break;
    case "/admin/report":
        if (!$login_status) {
            header("location: /admin-login");
            exit;
        }
        $admin->showAdminReport();
        break;
    case "/admin/profile":
        if (!$login_status) {
            header("location: /admin-login");
            exit;
        }
        $admin->showAdminProfile();
        break;
    case "/admin/customer-mgmt":
        if (!$login_status) {
            header("location: /admin-login");
            exit;
        }
        $admin->showCustomerMgmt();
        break;
    case "/admin/customer-mgmt/customer-list":
        if (!$login_status) {
            header("location: /admin-login");
            exit;
        }
        $admin->showCustomerMgmtList();
        break;
    case "/admin/customer-mgmt/customer-register":
        if (!$login_status) {
            header("location: /admin-login");
            exit;
        }
        $admin->showCustomerMgmtRegister();
        break;
    case "/admin/customer-mgmt/customer-edit":
        if (!$login_status) {
            header("location: /admin-login");
            exit;
        }
        $admin->showCustomerMgmtEdit();
        break;
    case "/admin/customer-mgmt/customer-delete":
        if (!$login_status) {
            header("location: /admin-login");
            exit;
        }
        $admin->deleteCustomer();
        break;
    case "/admin/user-mgmt":
        if (!$login_status) {
            header("location: /admin-login");
            exit;
        }
        $admin->showUserMgmt();
        break;
    case "/admin/user-mgmt/user-list":
        if (!$login_status) {
            header("location: /admin-login");
            exit;
        }
        $admin->showUserMgmtList();
        break;
    case "/admin/user-mgmt/user-register":
        if (!$login_status) {
            header("location: /admin-login");
            exit;
        }
        $admin->showUserMgmtRegister();
        break;
    case "/admin/user-mgmt/user-edit":
        if (!$login_status) {
            header("location: /admin-login");
            exit;
        }
        $admin->showUserMgmtEdit();
        break;
    case "/admin/user-mgmt/user-delete":
        if (!$login_status) {
            header("location: /admin-login");
            exit;
        }
        $admin->deleteUser();
        break;
    case "/admin/product-mgmt":
        if (!$login_status) {
            header("location: /admin-login");
            exit;
        }
        $admin->showProductMgmt();
        break;
    case "/admin/product-mgmt/product-list":
        if (!$login_status) {
            header("location: /admin-login");
            exit;
        }
        $admin->showProductMgmtList();
        break;
    case "/admin/product-mgmt/product-register":
        if (!$login_status) {
            header("location: /admin-login");
            exit;
        }
        $admin->showProductMgmtRegister();
        break;
    case "/admin/product-mgmt/product-edit":
        if (!$login_status) {
            header("location: /admin-login");
            exit;
        }
        $admin->showProductMgmtEdit();
        break;
    case "/admin/product-mgmt/product-delete":
        if (!$login_status) {
            header("location: /admin-login");
            exit;
        }
        $admin->deleteProduct();
        break;
    case "/admin/order-mgmt":
        if (!$login_status) {
            header("location: /admin-login");
            exit;
        }
        $admin->showOrderMgmt();
        break;
    case "/admin/order-mgmt/order-list":
        if (!$login_status) {
            header("location: /admin-login");
            exit;
        }
        $admin->showOrderListMgmt();
        break;
    case "/admin/order-mgmt/order-detail":
        if (!$login_status) {
            header("location: /admin-login");
            exit;
        }
        $admin->showOrderDetailMgmt();
        break;
    case "/admin/order-mgmt/order-edit":
        if (!$login_status) {
            header("location: /admin-login");
            exit;
        }
        $admin->showOrderEditMgmt();
        break;
    case "/customer/logout":
        if (!$login_status) {
            header("location: /login");
            exit;
        }
        $customer->handleCustomerLogout();
        break;
    default:
        $controller->notFound();
        http_response_code(404);
        echo "Page not found";
        break;
}
