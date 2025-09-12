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
}
