<?php
class AdminController
{
    public function showAdminDashboard()
    {
        include VIEW_PATH . '/admin/admin-dashboard.php';
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
}
