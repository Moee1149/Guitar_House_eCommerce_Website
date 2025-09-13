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
}
