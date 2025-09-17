<?php

class ProductModel
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getAllProducts()
    {
        $sql = "SELECT * FROM products";
        $res = mysqli_query($this->conn, $sql);
        $product_count = mysqli_num_rows($res); // Get the number of rows
        return [$res, $product_count];
    }

    public function getProductById($product_id)
    {
        $sql = "SELECT * FROM products WHERE product_id=$product_id";
        $res = mysqli_query($this->conn, $sql);
        $product = mysqli_fetch_assoc($res);
        return $product;
    }

    public function addNewProduct($productName, $category, $description, $price, $stock, $imagePath)
    {
        $sql = "INSERT INTO products (category_id, product_name, description, price, stock, image) VALUES
        ('$category', '$productName' ,'$description', '$price', '$stock', '$imagePath')";
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    public function updateProduct($product_id, $productName, $description, $price, $stock)
    {
        $sql = "UPDATE products SET product_name='$productName', description='$description', price='$price', stock='$stock' WHERE product_id=$product_id";
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    public function deleteProduct($product_id)
    {
        $sql = "DELETE FROM products WHERE product_id=$product_id";
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    public function getProductsWithCategory()
    {
        $sql = "SELECT
            p.product_id,
            p.product_name,
            p.image,
            p.rating,
            p.review_count,
            p.price,
            p.description,
            p.stock,
            c.name AS category_name
        FROM products p
        JOIN categories c ON p.category_id = c.category_id;";
        $res = mysqli_query($this->conn, $sql);
        return $res->fetch_all(MYSQLI_ASSOC);
    }
}
