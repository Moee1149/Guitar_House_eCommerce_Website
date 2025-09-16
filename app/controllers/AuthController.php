<?php
include APP_PATH . '/models/AuthModel.php';

class AuthController
{
    private $authmodel;

    public function __construct($conn)
    {
        $this->authmodel = new AuthModel($conn);
    }

    public function getCustomerLoginPage()
    {
        include VIEW_PATH . '/auth/customer-login.php';
    }

    public function getCustomerRegisterPage()
    {
        include VIEW_PATH . '/auth/customer-register.php';
    }

    public function getAdminLoginPage()
    {
        include VIEW_PATH . '/auth/admin-login.php';
    }

    public function getAdminRegisterPage()
    {
        include VIEW_PATH . '/auth/admin-register.php';
    }

    public function handleCustomerLogin()
    {
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        [$isLogin, $customerId, $customer_name] = $this->authmodel->verifyCustomer($email, $pwd);

        if ($isLogin) {
            $_SESSION['login_status'] = true;
            $_SESSION['customer_id'] = $customerId;
            $_SESSION['customer_name'] = $customer_name;
            $_SESSION['role'] = "customer";
            header("location: /customer/dashboard");
            exit;
        } else {
            $_SESSION['msg'] = "Email/Username or password doesn't match";
            header("location: /login");
            exit;
        }
    }

    public function handleCustomerRegister()
    {
        $fname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pwd = $_POST['password'];
        $addr = $_POST['address'];
        $agree = $_POST['agree'];

        $hashedPwd = sha1($pwd);
        $userExist = $this->authmodel->checkEmailAlreadyUse($email);
        if ($userExist) {
            $_SESSION['msg'] = "User with email already exits";
            header("location: /register");
            exit;
        }

        $isRegistered =  $this->authmodel->handleCreateNewUser($fname, $email, $phone, $hashedPwd, $addr);
        if ($isRegistered) {
            header("location: /login");
            exit;
        } else {
            $_SESSION['msg'] = "Unknow Error Occured";
        }
    }

    public function handleAdminLogin()
    {
        $email = $_POST['email'];
        $pwd = $_POST['password'];
        [$isLogin, $userId, $username] = $this->authmodel->verifyAdmin($email, $pwd);

        if ($isLogin) {
            $_SESSION['login_status'] = true;
            $_SESSION['admin_id'] = $userId;
            $_SESSION['admin_name'] = $username;
            $_SESSION['role'] = "admin";
            header("location: /admin/dashboard");
        } else {
            $_SESSION['msg'] = "Email/Username or password doesn't match";
            header("location: /admin-login");
            exit;
        }
    }

    public function handleAdminRegister()
    {
        $fname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $pwd = $_POST['password'];
        $addr = $_POST['address'];
        $agree = $_POST['agree'];

        $hashedPwd = sha1($pwd);
        $userExist = $this->authmodel->checkEmailAlreadyUse($email, "admin");
        if ($userExist) {
            $_SESSION['msg'] = "Admin with this email already exits";
            header("location: /admin-register");
            exit;
        }

        $isRegistered = $this->authmodel->handleCreateNewAdmin($fname, $email, $phone, $hashedPwd, $addr);
        if ($isRegistered) {
            header("location: /admin-login");
            exit;
        } else {
            $_SESSION['msg'] = "Unknow Error Occured";
        }
    }

    public function handleLogout()
    {
        $role = $_SESSION['role'];
        switch ($role) {
            case "admin":
                unset($_SESSION['login_status']);
                unset($_SESSION['admin_id']);
                unset($_SESSION['admin_name']);
                break;
            default:
                unset($_SESSION['login_status']);
                unset($_SESSION['customer_id']);
                unset($_SESSION['customer_name']);
                break;
        }
        unset($_SESSION['role']);
        header("location: /");
    }
}
