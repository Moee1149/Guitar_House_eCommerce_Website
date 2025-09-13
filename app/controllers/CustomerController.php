<?php
include_once APP_PATH . '/models/CustomerModel.php';

class CustomerController
{
    private $customerModel;

    public function __construct($conn)
    {
        $this->customerModel = new CustomerModel($conn);
    }

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

    public function showCustomerReport()
    {

        include VIEW_PATH . '/customer/customer-report.php';
    }

    public function showCustomerProfile()
    {

        include VIEW_PATH . '/customer/customer-profile.php';
    }

    public function handleCustomerLogout()
    {
        unset($_SESSION['login_status']);
        header("location: /");
    }
}
