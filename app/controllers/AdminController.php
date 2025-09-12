<?php
class AdminController
{
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
        include VIEW_PATH . '/admin/user_mgmt/user-list.php';
    }

    public function showUserMgmtRegister()
    {
        include VIEW_PATH . '/admin/user_mgmt/user-register.php';
    }

    public function showUserMgmtEdit()
    {
        include VIEW_PATH . '/admin/user_mgmt/user-edit.php';
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
