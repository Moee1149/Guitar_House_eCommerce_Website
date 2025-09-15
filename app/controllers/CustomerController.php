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
            if (!$city || !$state || !$city) {
                $_SESSION['msg'] = "Please fill in all required fields";
                header("location: /customer/checkout");
                exit;
            }
            $order_id = $this->orderModel->createOrder($customerId, $street, $state, $city, $totalAmount);
            if ($order_id) {
                $_SESSION['order_id'] = $order_id; // Store order_id in session
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
        $order_id = $_SESSION['order_id'];

        $cartItems = $this->productModel->getCartItems($customerId);
        $customer_data = $this->customerModel->getCustomerById($customerId);
        $order_data = $this->orderModel->getOrderById($order_id);

        include VIEW_PATH . '/customer/payment.php';
    }

    public function createOrderDetails($order_id, $customerId)
    {
        // Get cart items for the customer
        $cartItems = $this->productModel->getCartItems($customerId);

        foreach ($cartItems as $item) {
            $product_id = $item['product_id'];
            $quantity = $item['quantity'];
            $price = $item['price']; // Adjust if your cart item uses a different key

            // Insert order detail using your model's method
            $this->orderModel->createOrderDetail($order_id, $product_id, $quantity, $price);
        }
    }

    public function confirmOrder()
    {
        $order_id = $_SESSION['order_id'];
        $customerId = $_SESSION['customer_id'];

        if (isset($_POST['submit'])) {
            $payment_type = $_POST['payment'];
            if ($payment_type === "esewa") {
                header("location: /customer/payment/esewa");
            }
            $res =  $this->orderModel->updateOrder($order_id, $payment_type);
            $this->createOrderDetails($order_id, $customerId);
            if ($res) {
                header("location: /customer/thankyou");
            }
        }
    }

    public function payWithEsewa()
    {
        include VIEW_PATH . '/customer/esewa.php';
    }

    public function showThankyouPage()
    {
        $customerId = $_SESSION['customer_id'];
        $order_id = $_SESSION['order_id'];

        $cartItems = $this->productModel->getCartItems($customerId);
        $customer_data = $this->customerModel->getCustomerById($customerId);
        $order_data = $this->orderModel->getOrderById($order_id);
        include VIEW_PATH . '/customer/thankyou.php';
    }

    public function showCustomerDashboard()
    {
        $customername = $_SESSION['customer_name'];
        include VIEW_PATH . '/customer/dashboard.php';
    }

    public function showCustomerReport()
    {
        $customerId = $_SESSION['customer_id'];
        $status = isset($_GET['status']) && $_GET['status'] !== '' ? $_GET['status'] : null;
        $dateType = isset($_GET['date']) && $_GET['date'] !== '' ? $_GET['date'] : null;

        // Calculate date_from and date_to based on dateType
        $dateFrom = null;
        $dateTo = null;
        if ($dateType === 'daily') {
            $dateFrom = $dateTo = date('Y-m-d');
        } elseif ($dateType === 'monthly') {
            $dateFrom = date('Y-m-01');
            $dateTo = date('Y-m-t');
        } elseif ($dateType === 'yearly') {
            $dateFrom = date('Y-01-01');
            $dateTo = date('Y-12-31');
        }

        // 1. Get overall totals (no filters)
        $allOrders = $this->orderModel->getOrderReport($customerId);
        $totalOrders = count($allOrders);
        $totalSpend = 0;
        foreach ($allOrders as $order) {
            $totalSpend += $order['total_amount'];
        }

        // 2. Get filtered report (for table and sidebar)
        $orderReport = $this->orderModel->getOrderReport($customerId, $status, $dateFrom, $dateTo);

        // 3. Calculate status breakdown for filtered report
        $orderStatusCounts = [
            'pending' => 0,
            'confirmed' => 0,
            'shipped' => 0,
            'delivered' => 0
        ];

        foreach ($allOrders as $order) {
            $statusKey = strtolower($order['status']);
            if (isset($orderStatusCounts[$statusKey])) {
                $orderStatusCounts[$statusKey]++;
            }
        }

        // Pass all variables to the view
        include VIEW_PATH . '/customer/customer-report.php';
    }

    public function showCustomerProfile()
    {
        $customerId = $_SESSION['customer_id'];
        $customer_data = $this->customerModel->getCustomerById($customerId);

        if (isset($_GET['delete']) && $_GET['delete'] == 1 && isset($_GET['customer_id'])) {
            $customerId = $_GET['customer_id'];
            $res = $this->customerModel->deleteCustomer($customerId);
            if (!$res) {
                $_SESSION['msg'] = "Failed to delete customer.";
                return;
            }
            $_SESSION['msg'] = "Customer deleted successfully.";
            unset($_SESSION['login_status']);
            unset($_SESSION['customer_id']);
            unset($_SESSION['customer_name']);
            header("location: /login");
            exit;
        }

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $dbPwd = $customer_data['password']; //hashing password
            $currentPassword = $_POST['currentPassword'];
            $newPassword = $_POST['newPassword'];

            if (!empty($currentPassword) && !empty($newPassword)) {
                switch (true) {
                    case (sha1($currentPassword) != $dbPwd):
                        $_SESSION['msg'] = "password is incorrect.";
                        break;
                    default:
                        $hashedNewPwd = sha1($newPassword);
                        $this->customerModel->updateCustomerPassword($customerId, $hashedNewPwd);
                        break;
                }
            }
            $this->customerModel->updateCustomer($customerId, $name, $phone, $address);
            $_SESSION['msg'] = "Profile updated successfully.";
            $_SESSION['customer_name'] = $name;
            header("location: /customer/profile");
            exit;
        }
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
