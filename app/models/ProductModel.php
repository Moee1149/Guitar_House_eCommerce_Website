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

    public function getMostViewedProducts()
    {
        $sql = "SELECT * FROM products ORDER BY views DESC LIMIT 5";
        $res = mysqli_query($this->conn, $sql);
        return $res->fetch_all(MYSQLI_ASSOC);
    }

    public function getFeaturedProducts()
    {
        $sql = "SELECT p.*, c.name As category_name FROM products p JOIN categories c ON p.category_id = c.category_id WHERE is_featured=1 LIMIT 4";
        $res = mysqli_query($this->conn, $sql);
        return $res->fetch_all(MYSQLI_ASSOC);
    }

    public function updateViewCount($product_id)
    {
        $sql = "UPDATE products SET views = views + 1 WHERE product_id = $product_id";
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    public function getProductById($product_id)
    {
        $sql = "SELECT * FROM products WHERE product_id=$product_id";
        $res = mysqli_query($this->conn, $sql);
        $product = mysqli_fetch_assoc($res);
        return $product;
    }

    public function getFilteredSortedProducts($category = null, $sort = null, $search = null)
    {
        $sql = "SELECT p.*, c.name AS category_name FROM products p JOIN categories c ON p.category_id = c.category_id WHERE 1=1";

        if ($category) {
            $sql .= " AND c.name = '" . mysqli_real_escape_string($this->conn, $category) . "'";
        }

        if ($search) {
            $searchEscaped = mysqli_real_escape_string($this->conn, $search);
            $sql .= " AND (p.product_name LIKE '%$searchEscaped%' OR p.description LIKE '%$searchEscaped%')";
        }
        // Sorting logic
        if ($sort) {
            switch ($sort) {
                case 'popularity':
                    $sql .= " ORDER BY p.views DESC";
                    break;
                case 'price-low-high':
                    $sql .= " ORDER BY p.price ASC";
                    break;
                case 'price-high-low':
                    $sql .= " ORDER BY p.price DESC";
                    break;
                case 'new-arrivals':
                    $sql .= " ORDER BY p.created_at DESC";
                    break;
                case 'customer-rating':
                    $sql .= " ORDER BY p.rating DESC";
                    break;
                default:
                    $sql .= " ORDER BY p.product_id DESC";
            }
        } else {
            $sql .= " ORDER BY p.product_id DESC";
        }

        $res = mysqli_query($this->conn, $sql);
        return $res->fetch_all(MYSQLI_ASSOC);
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
