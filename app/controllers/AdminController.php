<?php
include_once APP_PATH . '/models/UserModel.php';
include_once APP_PATH . '/models/ProductModel.php';
include_once APP_PATH . 'models/OrderModel.php';
include_once APP_PATH . 'models/StoreModel.php';


class AdminController
{
    private $userModel;
    private $customerModel;
    private $productModel;
    private $orderModel;
    private $storeModel;

    public function __construct($conn)
    {
        $this->userModel = new UserModel($conn);
        $this->customerModel = new CustomerModel($conn);
        $this->productModel = new ProductModel($conn);
        $this->orderModel = new OrderModel($conn);
        $this->storeModel = new StoreModel($conn);
    }

    public function showAdminDashboard()
    {
        [$res, $productcount] = $this->productModel->getAllProducts();
        $productsold = $this->orderModel->getProductSold();
        $totalRevenue = $this->orderModel->totalRevenue();
        include VIEW_PATH . '/admin/admin-dashboard.php';
    }

    public function showAdminReport()
    {
        $dateType = isset($_GET['period']) && $_GET['period'] !== '' ? $_GET['period'] : null;
        $startDate = isset($_GET['startDate']) && $_GET['startDate'] !== '' ? $_GET['startDate'] : null;
        $endDate = isset($_GET['endDate']) && $_GET['endDate'] !== '' ? $_GET['endDate'] : null;

        // Calculate date_from and date_to based on dateType
        $dateFrom = null;
        $dateTo = null;
        if (!$startDate && !$endDate) {
            if ($dateType === 'weekly') {
                $dateFrom = date('Y-m-d', strtotime('-7 days'));
                $dateTo = date('Y-m-d');
            } elseif ($dateType === 'monthly') {
                $dateFrom = date('Y-m-01');
                $dateTo = date('Y-m-t');
            } elseif ($dateType === 'yearly') {
                $dateFrom = date('Y-01-01');
                $dateTo = date('Y-12-31');
            } else {
                $dateFrom = $dateTo = date('Y-m-d');
            }
        } else {
            $dateFrom = $startDate;
            $dateTo = $endDate;
        }

        extract($this->orderModel->getReportForAdmin($dateFrom, $dateTo));
        include VIEW_PATH . '/admin/admin-report.php';
    }

    public function showAdminProfile()
    {
        $store = $this->storeModel->getStoreProfile($_SESSION['admin_id']);
        include VIEW_PATH . '/admin/admin-profile.php';
    }

    public function updateAdminPassword()
    {
        $adminId = $_SESSION['admin_id'];
        $admin = $this->userModel->getUserById($adminId);

        if (isset($_POST['submit'])) {
            $dbPwd = $admin['password']; //hashing password
            $currentPassword = $_POST['current_password'];
            $newPassword = $_POST['new_password'];
            $confirmPassword = $_POST['confirm_password'];

            if (!empty($currentPassword) && !empty($newPassword)) {
                switch (true) {
                    case (sha1($currentPassword) != $dbPwd):
                        $_SESSION['msg'] = "Password is incorrect.";
                        break;
                    case ($newPassword != $confirmPassword):
                        $_SESSION['msg'] = "Passwords do not match.";
                        break;
                    default:
                        $hashedNewPwd = sha1($newPassword);
                        $this->userModel->updateAdminPasswod($adminId, $hashedNewPwd);
                        $_SESSION['msg'] = "Password updated successfully.";
                        break;
                }
            }
            header("location: /admin/profile?tab=security");
        }
    }

    public function updateStoreProfile()
    {
        $storeName = $_POST['storename'];
        $storeAddress = $_POST['address'];
        $storePhone = $_POST['phone'];
        $storeEmail = $_POST['email'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $imagePath = $_FILES['image']['name'];
        $user_id = $_SESSION['admin_id'];

        $currentStore = $this->storeModel->getStoreProfile($user_id);
        $imagePath = $currentStore['store_logo'] ?? null;

        // Check if file is uploaded
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $tmpName = $_FILES['image']['tmp_name'];
            $originalName = basename($_FILES['image']['name']);
            $extension = pathinfo($originalName, PATHINFO_EXTENSION);

            // Generate unique filename to avoid overwrites
            $newFileName = uniqid("", true) . "." . $extension;
            $destination = STORE_LOGO . "/" . $newFileName;

            // Move file from temp directory to uploads/
            if (move_uploaded_file($tmpName, $destination)) {
                // Save relative path in DB (better than absolute path)
                $imagePath = "/public/images/profile/store-profile/$newFileName";
            } else {
                $_SESSION['msg'] = "❌ Failed to move uploaded file.";
            }
        } else {
            $_SESSION['msg'] = "❌ No image uploaded or error occurred.";
        }
        $res = $this->storeModel->updateStoreProfile($user_id, $storeName, $storeAddress, $city, $state, $storePhone, $storeEmail, $imagePath);
        $res ? $_SESSION['msg'] = "✅ Store profile updated successfully." : $_SESSION['msg'] = "❌ Failed to save store profile.";
        header("location: /admin/profile?tab=store-profile");
        exit;
    }

    //customer management methods
    public function showCustomerMgmt()
    {
        include VIEW_PATH . '/admin/customer_mgmt/index.php';
    }

    public function showCustomerMgmtList()
    {
        $customers = $this->customerModel->getAllCustomers();
        include VIEW_PATH . '/admin/customer_mgmt/customer-list.php';
    }

    public function showCustomerMgmtRegister()
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
                    $res = $this->customerModel->registerNewCustomer($fname, $email, $hashedPwd, $phone, $addr);
                    $res ?  $_SESSION['msg'] = "Hey! Customer registered successfully." :  $_SESSION['msg'] = "Oops! Customerregistration failed.";
                    break;
                default:
                    $_SESSION['msg'] = "Oops! Password not matched.";
                    break;
            }
        }
        include VIEW_PATH . '/admin/customer_mgmt/customer-register.php';
    }

    public function showCustomerMgmtEdit()
    {
        if (!isset($_GET['customer_id'])) {
            $_SESSION['msg'] = 'User ID not found';
            header("location: /admin/customer-mgmt/customer-list");
            exit;
        }

        if (isset($_POST['submit'])) {
            $user_id = $_POST['user_id'];
            $fname = $_POST['fullname'];
            $phone = $_POST['phone'];
            $addr = $_POST['address'];
            $res = $this->customerModel->updateCustomer($user_id, $fname, $phone, $addr);
            $res ? $_SESSION['msg'] = "Hey! Customer updated successfully." : $_SESSION['msg'] = "Oops! Error updating customer.";
            header("location: /admin/customer-mgmt/customer-list");
            exit;
        }

        $user_id = $_GET['customer_id'];
        $user = $this->customerModel->getCustomerById($user_id);
        $fname = $user['customer_name'] ?? "";
        $ph =  $user['phone'] ?? "";
        $email = $user['email'] ?? "";
        $addr =  $user['address'] ?? "";

        include VIEW_PATH . '/admin/customer_mgmt/customer-edit.php';
    }

    public function deleteCustomer()
    {
        if (!isset($_GET['customer_id'])) {
            $_SESSION['msg'] = 'User ID not found';
            header("location: /admin/customer-mgmt/customer-list");
            exit;
        }

        $user_id = $_GET['customer_id'];
        $res = $this->customerModel->deleteCustomer($user_id);
        $res ? $_SESSION['msg'] = "Hey! Customer deleted successfully." : $_SESSION['msg'] = "Oops! Error deleting customer.";
        header("location: /admin/customer-mgmt/customer-list");
        exit;
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
        [$products, $product_count] = $this->productModel->getAllProducts();
        include VIEW_PATH . '/admin/product_mgmt/product-list.php';
    }

    public function showProductMgmtRegister()
    {
        if (isset($_POST['submit'])) {
            $productName = $_POST['product_name'];
            $category = $_POST['product_category'];
            $stock = $_POST['product_stock'];
            $price = $_POST['product_price'];
            $description =  trim($_POST['product_description']);
            $imagePath = null;

            // Check if file is uploaded
            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $tmpName = $_FILES['image']['tmp_name'];
                $originalName = basename($_FILES['image']['name']);
                $extension = pathinfo($originalName, PATHINFO_EXTENSION);

                // Generate unique filename to avoid overwrites
                $newFileName = uniqid("prod_", true) . "." . $extension;
                $destination = UPLOAD_DIR . "/" . $newFileName;

                // Move file from temp directory to uploads/
                if (move_uploaded_file($tmpName, $destination)) {
                    // Save relative path in DB (better than absolute path)
                    $imagePath = "/public/images/products/$newFileName";
                    $res = $this->productModel->addNewProduct($productName, $category, $description, $price, $stock, $imagePath);
                    $res ? $_SESSION['msg'] = "✅ Product saved successfully!" : $_SESSION['msg'] = "❌ Failed to save product.";
                    header("location: /admin/product-mgmt/product-list");
                } else {
                    $_SESSION['msg'] = "❌ Failed to move uploaded file.";
                }
            } else {
                $_SESSION['msg'] = "❌ No image uploaded or error occurred.";
            }
        }
        include VIEW_PATH . '/admin/product_mgmt/product-register.php';
    }

    public function showProductMgmtEdit()
    {
        if (!isset($_GET['product_id'])) {
            $_SESSION['msg'] = 'Product ID not found';
            header("location: /admin/product-mgmt/prodcut-list");
            exit;
        }

        if (isset($_POST['submit'])) {
            $product_id = $_POST['product_id'];
            $productName = $_POST['product_name'];
            $stock = $_POST['product_stock'];
            $price = $_POST['product_price'];
            $description =  trim($_POST['product_description']);

            $res = $this->productModel->updateProduct($product_id, $productName, $description, $price, $stock);
            $res ? $_SESSION['msg'] = "✅ Product update successfully!" : $_SESSION['msg'] = "❌ Failed to update product.";
            header("location: /admin/product-mgmt/product-list");
            exit;
        }

        $data = $this->productModel->getProductById($_GET['product_id']);
        $product_id    = $data['product_id'] ?? '';
        $product_name  = $data['product_name'] ?? '';
        $description   = $data['description'] ?? '';
        $price         = $data['price'] ?? '';
        $stock         = $data['stock'] ?? '';

        include VIEW_PATH . '/admin/product_mgmt/product-edit.php';
    }

    public function deleteProduct()
    {
        if (!isset($_GET['product_id'])) {
            $_SESSION['msg'] = 'Product ID not found';
            header("location: /admin/product-mgmt/product-list");
            exit;
        }

        $product_id = $_GET['product_id'];
        $res = $this->productModel->deleteProduct($product_id);
        $res ? $_SESSION['msg'] = "Hey! Product deleted successfully." : $_SESSION['msg'] = "Oops! Error deleting product.";
        header("location: /admin/product-mgmt/product-list");
        exit;
    }

    //order mgmt
    public function showOrderMgmt()
    {
        include VIEW_PATH . '/admin/order_mgmt/index.php';
    }

    public function showOrderListMgmt()
    {
        $orders = $this->orderModel->getAllOrders();
        include VIEW_PATH . '/admin/order_mgmt/order-list.php';
    }

    public function showOrderEditMgmt()
    {
        if (!isset($_GET['order_id'])) {
            $_SESSION['msg'] = 'Order ID not found';
            header("location: /admin/order-mgmt/order-list");
            exit;
        }

        $order_id = $_GET['order_id'];
        $data = $this->orderModel->getOrderById($order_id);

        // Extract all variables from $data
        $order_id        = $data['order_id'] ?? '';
        $customer_name   = $data['customer'] ?? '';
        $customer_phone  = $data['phone'] ?? '';
        $customer_email  = $data['email'] ?? '';
        $order_date      = $data['order_date'] ?? '';
        $total_amount    = $data['total_amount'] ?? '';
        $shipping_street = $data['shipping_street'] ?? '';
        $shipping_city   = $data['shipping_city'] ?? '';
        $shipping_state  = $data['shipping_state'] ?? '';
        $status          = $data['status'] ?? '';

        // Get order items
        [$order_items, $order_items_count] = $this->orderModel->getOrderItems($order_id);

        // Handle form submission if needed (update logic here if you want to allow editing)
        if (isset($_POST['submit'])) {
            // Add your update logic here if needed
            // Example: $res = $this->orderModel->updateOrder(...);
            // Redirect or set message as needed
        }

        include VIEW_PATH . '/admin/order_mgmt/order-edit.php';
    }

    public function showOrderDetailMgmt()
    {
        include VIEW_PATH . '/admin/order_mgmt/order-detail.php';
    }
}
