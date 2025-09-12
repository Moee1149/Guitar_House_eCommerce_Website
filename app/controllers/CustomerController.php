<?php
class CustomerController
{
    public function showCartPage()
    {
        include VIEW_PATH . '/customer/cart.php';
    }

    public function showCheckoutPage()
    {
        include VIEW_PATH . '/customer/checkout.php';
    }

    public function showPaymentPage()
    {
        include VIEW_PATH . '/customer/payment.php';
    }

    public function showThankyouPage()
    {
        include VIEW_PATH . '/customer/thankyou.php';
    }

    public function showCustomerDashboard()
    {
        include VIEW_PATH . '/customer/dashboard.php';
    }

    public function handleCustomerLogout()
    {
        unset($_SESSION['login_status']);
        header("location: /");
    }
}
