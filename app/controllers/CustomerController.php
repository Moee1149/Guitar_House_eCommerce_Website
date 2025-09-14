<?php
include_once APP_PATH . '/models/CustomerModel.php';

class CustomerController
{
    private $customerModel;
    private $productModel;

    public function __construct($conn)
    {
        $this->customerModel = new CustomerModel($conn);
        $this->productModel = new ProductModel($conn);
    }

    public function showCartPage()
    {
        $customerId = $_SESSION['customer_id'];
        $cartItems = $this->productModel->getCartItems($customerId);
        include VIEW_PATH . '/customer/cart.php';
    }

    public function addToCart()
    {
        $product_id = $_GET['product_id'];
        $customerId = $_SESSION['customer_id'];
        if ($this->productModel->checkProductExitsInCart($customerId, $product_id)) {
            $_SESSION['msg'] = "Product already exists in cart";
            header("location: /customer/cart");
            return;
        }

        $res = $this->productModel->addToCart($product_id);
        if ($res) {
            header("location: /customer/cart");
        } else {
            $_SESSION['msg'] = "Error adding product to cart";
        }
    }

    public function removeItemFromCart()
    {
        $cart_id = $_GET['cart_id'];
        $res = $this->productModel->removeItemFromCart($cart_id);
        if ($res) {
            header("location: /customer/cart");
        } else {
            $_SESSION['msg'] = "Error removing product from cart";
        }
    }

    public function clearCart()
    {
        $customerId = $_SESSION['customer_id'];
        $res = $this->productModel->clearCart($customerId);
        if ($res) {
            header("location: /customer/cart");
            $_SESSION['msg'] = "Clear Cart Successfully";
        } else {
            $_SESSION['msg'] = "Error clearing cart";
        }
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
        unset($_SESSION['customer_id']);
        header("location: /");
    }
}
