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
        [$isLogin, $customerId] = $this->authmodel->verifyCustomer($email, $pwd);

        if ($isLogin) {
            $_SESSION['login_status'] = true;
            $_SESSION['customer_id'] = $customerId;
            header("location: /customer/dashboard");
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
        $isLogin = $this->authmodel->verifyAdmin($email, $pwd);

        if ($isLogin) {
            $_SESSION['login_status'] = true;
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
}
