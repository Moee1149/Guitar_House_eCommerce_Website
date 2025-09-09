<?php
include 'BaseController.php';

class PublicController extends BaseController
{
    public function index()
    {
        include VIEW_PATH . '/public/home.php';
    }

    public function productList()
    {
        include VIEW_PATH . '/public/product.php';
    }

    public function product($id)
    {
        echo $id;
    }

    public function contact()
    {
        include VIEW_PATH . '/public/contact.php';
    }

    public function customerLogin()
    {
        include VIEW_PATH . '/auth/customer-login.php';
    }

    public function customerRegister()
    {
        include VIEW_PATH . '/auth/customer-register.php';
    }

    public function notFound() {}
}
