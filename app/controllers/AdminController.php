<?php
include APP_PATH . '/models/UserModel.php';

class AdminController
{
    private $userModel;

    public function __construct($conn)
    {
        $this->userModel = new UserModel($conn);
    }

    public function showAdminDashboard()
    {
        include VIEW_PATH . '/admin/admin-dashboard.php';
    }

    public function showAdminReport()
    {
        include VIEW_PATH . '/admin/admin-report.php';
    }

    public function showAdminProfile()
    {
        include VIEW_PATH . '/admin/admin-profile.php';
    }

    //customer management methods
    public function showCustomerMgmt()
    {
        include VIEW_PATH . '/admin/customer_mgmt/index.php';
    }

    public function showCustomerMgmtList()
    {
        include VIEW_PATH . '/admin/customer_mgmt/customer-list.php';
    }

    public function showCustomerMgmtRegister()
    {
        include VIEW_PATH . '/admin/customer_mgmt/customer-register.php';
    }

    public function showCustomerMgmtEdit()
    {
        include VIEW_PATH . '/admin/customer_mgmt/customer-edit.php';
    }

    //user management methods
    public function showUserMgmt()
    {
        include VIEW_PATH . '/admin/user_mgmt/index.php';
    }

    public function showUserMgmtList()
    {
        $users = $this->userModel->getAllUser();
        include VIEW_PATH . '/admin/user_mgmt/user-list.php';
    }

    public function showUserMgmtRegister()
    {
        if (isset($_POST['submit'])) {
            $fname = $_POST['fullname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $pwd = $_POST['password'];
            $cpwd = $_POST['cpassword'];
            $addr = $_POST['address'];
            $agree = $_POST['agree'];
            switch ($pwd) {
                case $cpwd:
                    $hashedPwd = sha1($pwd);
                    $res = $this->userModel->registerNewUser($fname, $email, $hashedPwd, $phone, $addr);
                    $res ?  $_SESSION['msg'] = "Hey! User registered successfully." :  $_SESSION['msg'] = "Oops! User registration failed.";
                    break;
                default:
                    $_SESSION['msg'] = "Oops! Password not matched.";
                    break;
            }
        }
        include VIEW_PATH . '/admin/user_mgmt/user-register.php';
    }

    public function showUserMgmtEdit()
    {
        if (!isset($_GET['user_id'])) {
            $_SESSION['msg'] = 'User ID not found';
            header("location: /admin/user-mgmt/user-list");
            exit;
        }

        if (isset($_POST['submit'])) {
            $user_id = $_POST['user_id'];
            $fname = $_POST['fullname'];
            $phone = $_POST['phone'];
            $addr = $_POST['address'];
            $res = $this->userModel->updateUser($user_id, $fname, $phone, $addr);
            $res ? $_SESSION['msg'] = "Hey! User updated successfully." : $_SESSION['msg'] = "Oops! Error updating user.";
            header("location: /admin/user-mgmt/user-list");
            exit;
        }

        $user_id = $_GET['user_id'];
        $user = $this->userModel->getUserById($user_id);
        $fname = $user['user_name'] ?? "";
        $ph =  $user['phone'] ?? "";
        $email = $user['email'] ?? "";
        $addr =  $user['address'] ?? "";

        include VIEW_PATH . '/admin/user_mgmt/user-edit.php';
    }

    public function deleteUser()
    {
        if (!isset($_GET['user_id'])) {
            $_SESSION['msg'] = 'User ID not found';
            header("location: /admin/user-mgmt/user-list");
            exit;
        }

        $user_id = $_GET['user_id'];
        $res = $this->userModel->deleteUser($user_id);
        $res ? $_SESSION['msg'] = "Hey! User deleted successfully." : $_SESSION['msg'] = "Oops! Error deleting user.";
        header("location: /admin/user-mgmt/user-list");
        exit;
    }

    //product mgmt
    public function showProductMgmt()
    {
        include VIEW_PATH . '/admin/product_mgmt/index.php';
    }

    public function showProductMgmtList()
    {
        include VIEW_PATH . '/admin/product_mgmt/product-list.php';
    }

    public function showProductMgmtRegister()
    {
        include VIEW_PATH . '/admin/product_mgmt/product-register.php';
    }

    public function showProductMgmtEdit()
    {
        include VIEW_PATH . '/admin/product_mgmt/product-edit.php';
    }

    //order mgmt
    public function showOrderMgmt()
    {
        include VIEW_PATH . '/admin/order_mgmt/index.php';
    }

    public function showOrderListMgmt()
    {
        include VIEW_PATH . '/admin/order_mgmt/order-list.php';
    }

    public function showOrderEditMgmt()
    {
        include VIEW_PATH . '/admin/order_mgmt/order-edit.php';
    }

    public function showOrderDetailMgmt()
    {
        include VIEW_PATH . '/admin/order_mgmt/order-detail.php';
    }
}
