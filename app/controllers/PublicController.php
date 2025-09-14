<?php

class PublicController
{
    private $productModel;

    public function __construct($conn)
    {
        $this->productModel = new ProductModel($conn);
    }

    public function index()
    {
        include VIEW_PATH . '/public/home.php';
    }

    public function productList()
    {
        $products = $this->productModel->getProductsWithCategory();
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

    public function notFound() {}
}
