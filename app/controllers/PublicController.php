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
        $mostViewProducts = $this->productModel->getMostViewedProducts();
        $featuredProducts = $this->productModel->getFeaturedProducts();
        include VIEW_PATH . '/public/home.php';
    }

    public function productList()
    {
        $products = $this->productModel->getProductsWithCategory();
        include VIEW_PATH . '/public/product.php';
    }

    public function productDetail($product_id)
    {
        $this->productModel->updateViewCount($product_id);
        $product = $this->productModel->getProductById($product_id);
        include VIEW_PATH . '/public/product-detail.php';
    }

    public function contact()
    {
        include VIEW_PATH . '/public/contact.php';
    }

    public function notFound()
    {
        include VIEW_PATH . '/public/notfound.php';
    }
}
