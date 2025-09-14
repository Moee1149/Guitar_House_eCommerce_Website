<?php
include_once APP_PATH . '/models/CustomerModel.php';

class CustomerController
{
    private $customerModel;
    private $productModel;
    private $orderModel;

    public function __construct($conn)
    {
        $this->customerModel = new CustomerModel($conn);
        $this->productModel = new ProductModel($conn);
        $this->orderModel = new OrderModel($conn);
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

    public function updateCartItemQuantity()
    {
        $cart_id = $_GET['cart_id'];
        $quantity = $_GET['quantity'];
        $res = $this->productModel->updateCartItemQuantity($cart_id, $quantity);
        if ($res) {
            header("location: /customer/cart");
        } else {
            $_SESSION['msg'] = "Error updating cart item quantity";
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
        $customerId = $_SESSION['customer_id'];

        if (isset($_POST['submit'])) {
            $street = $_POST['address'];
            $state = $_POST['state'];
            $city = $_POST['city'];
            $totalAmount = $_POST['totalAmount'];
            $res = $this->orderModel->createOrder($customerId, $street, $state, $city, $totalAmount);
            if ($res) {
                header("location: /customer/payment");
                exit;
            } else {
                $_SESSION['msg'] = "Error creating order";
                return;
            }
        }

        $cartItems = $this->productModel->getCartItems($customerId);
        $customer_data = $this->customerModel->getCustomerById($customerId);
        include VIEW_PATH . '/customer/checkout.php';
    }

    public function showPaymentPage()
    {
        $customerId = $_SESSION['customer_id'];
        $cartItems = $this->productModel->getCartItems($customerId);
        $customer_data = $this->customerModel->getCustomerById($customerId);
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
        unset($_SESSION['customer_name']);
        header("location: /");
    }
}
