<?php
include APP_PATH . '/models/UserModel.php';

class AuthController
{
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
        $usermodel = new UserModel();
        $isLogin = $usermodel->verifyCustomer($email, $pwd);

        if ($isLogin) {
            $_SESSION['login_status'] = true;
            header("location: /");
        } else {
            $_SESSION['msg'] = "Email/Username or password doesn't match";
            header("location: /login");
            exit;
        }
    }
}
