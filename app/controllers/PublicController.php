<?php
include 'BaseController.php';

class PublicController extends BaseController
{
    public function index()
    {
        include VIEW_PATH . '/home.php';
    }

    public function product()
    {
        include VIEW_PATH . '/product.php';
    }

    public function notFound() {}
}
