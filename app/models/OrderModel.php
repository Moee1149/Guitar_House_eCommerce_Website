<?php
class OrderModel
{
    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getAllOrders()
    {
        $sql = "SELECT
            o.order_id AS order_id,
            c.customer_name AS customer,
            DATE(o.order_date) AS order_date,
            COUNT(oi.order_id) AS item_count,
            o.total_amount,
            o.order_status
        FROM orders o
        LEFT JOIN customers c ON o.customer_id= c.customer_id
        LEFT JOIN order_items oi ON o.order_id = oi.order_id
        GROUP BY o.order_id, c.customer_name, o.order_date, o.total_amount, o.order_status
        ORDER BY o.order_date DESC;";
        $res = mysqli_query($this->conn, $sql);
        return $res->fetch_all(MYSQLI_ASSOC);
    }

    public function getOrderById($orderId)
    {
        $sql = "SELECT
            o.order_id AS order_id,
            c.customer_name AS customer,
            c.phone AS phone,
            c.email AS email,
            DATE(o.order_date) AS order_date,
            o.total_amount,
            o.shipping_street AS shipping_street,
            o.city AS shipping_city,
            o.state AS shipping_state,
            o.payment_type,
            o.payment_status,
            o.order_status
        FROM orders o
        LEFT JOIN customers c ON o.customer_id= c.customer_id
        WHERE o.order_id = $orderId
        GROUP BY o.order_id, c.customer_name, o.order_date, o.total_amount, o.order_status;";
        $res = mysqli_query($this->conn, $sql);
        return $res->fetch_assoc();
    }

    public function getOrderItems($orderId)
    {
        $sql = "SELECT
            oi.order_item_id AS order_item_id,
            p.product_name AS product_name,
            p.product_id AS product_id,
            p.image AS image,
            oi.quantity AS quantity,
            oi.price AS price,
            (oi.quantity * p.price) AS total_amount
        FROM order_items oi
        LEFT JOIN products p ON oi.product_id = p.product_id
        WHERE oi.order_id = $orderId;";
        $res = mysqli_query($this->conn, $sql);
        $order_items_count = mysqli_num_rows($res); // Get the number of rows
        return [$res, $order_items_count];
    }

    public function updateOrder($orderId, $paymentType)
    {
        //update order
        $sql = "UPDATE orders SET payment_type = '$paymentType' WHERE order_id = $orderId;";
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    public function updateOrderWithStatus($orderId, $paymentType, $paymentStatus, $orderStatus)
    {
        //update order
        $sql = "UPDATE orders SET payment_type = '$paymentType', payment_status = '$paymentStatus', order_status = '$orderStatus' WHERE order_id = $orderId;";
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    public function createOrder($customerId, $street, $city, $state, $totalAmount)
    {
        $sql = "INSERT INTO orders (customer_id, shipping_street, city, state, total_amount) VALUES ($customerId, '$street', '$city', '$state', $totalAmount);";
        $res = mysqli_query($this->conn, $sql);
        if ($res) {
            return mysqli_insert_id($this->conn); // Return the new order_id
        }
        return false;
    }

    public function createOrderDetail($orderId, $productId, $quantity, $price)
    {
        $sql = "INSERT INTO order_items (order_id, product_id, quantity, price) VALUES ($orderId, $productId, $quantity, $price);";
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    public function getOrderReport($customerId, $status = null, $dateFrom = null, $dateTo = null)
    {
        $where = ["o.customer_id = " . intval($customerId)];
        if ($status !== null) {
            $where[] = "o.order_status = '" . mysqli_real_escape_string($this->conn, $status) . "'";
        }
        if ($dateFrom !== null) {
            $where[] = "DATE(o.order_date) >= '" . mysqli_real_escape_string($this->conn, $dateFrom) . "'";
        }
        if ($dateTo !== null) {
            $where[] = "DATE(o.order_date) <= '" . mysqli_real_escape_string($this->conn, $dateTo) . "'";
        }
        $whereSql = "WHERE " . implode(" AND ", $where);

        $sql = "SELECT
            o.order_id,
            DATE(o.order_date) AS order_date,
            COUNT(oi.order_item_id) AS items,
            o.total_amount,
            o.order_status AS status
        FROM orders o
        LEFT JOIN order_items oi ON o.order_id = oi.order_id
        $whereSql
        GROUP BY o.order_id, o.order_date, o.total_amount, o.order_status
        ORDER BY o.order_date DESC;";
        $res = mysqli_query($this->conn, $sql);
        return $res->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductSold()
    {
        $sql = "SELECT SUM(quantity) AS total_sold FROM order_items";
        $res = mysqli_query($this->conn, $sql);
        return $res->fetch_assoc()['total_sold'];
    }

    public function totalRevenue()
    {
        $sql = "SELECT SUM(total_amount) AS total_revenue FROM orders";
        $res = mysqli_query($this->conn, $sql);
        return $res->fetch_assoc()['total_revenue'];
    }

    public function getReportForAdmin($dateFrom = null, $dateTo = null)
    {
        // 1. Products Added
        $where = [];
        if ($dateFrom !== null) {
            $where[] = "DATE(created_at) >= '" . mysqli_real_escape_string($this->conn, $dateFrom) . "'";
        }
        if ($dateTo !== null) {
            $where[] = "DATE(created_at) <= '" . mysqli_real_escape_string($this->conn, $dateTo) . "'";
        }
        $whereSql = !empty($where) ? "WHERE " . implode(" AND ", $where) : "";
        $productSql = "SELECT * FROM products $whereSql";
        $res = mysqli_query($this->conn, $productSql);
        $productcount = $res ? mysqli_num_rows($res) : 0;

        // 2. Products Sold
        $where = [];
        if ($dateFrom !== null) {
            $where[] = "DATE(o.order_date) >= '" . mysqli_real_escape_string($this->conn, $dateFrom) . "'";
        }
        if ($dateTo !== null) {
            $where[] = "DATE(o.order_date) <= '" . mysqli_real_escape_string($this->conn, $dateTo) . "'";
        }
        $whereSql = !empty($where) ? "WHERE " . implode(" AND ", $where) : "";
        $soldSql = "SELECT SUM(quantity) as total_sold FROM order_items oi
                    JOIN orders o ON oi.order_id = o.order_id $whereSql";
        $res = mysqli_query($this->conn, $soldSql);
        $row = $res ? mysqli_fetch_assoc($res) : ['total_sold' => 0];
        $product_sold = $row['total_sold'] ?: 0;

        // 3. Most Viewed Products
        $where = [];
        if ($dateFrom !== null) {
            $where[] = "DATE(p.created_at) >= '" . mysqli_real_escape_string($this->conn, $dateFrom) . "'";
        }
        if ($dateTo !== null) {
            $where[] = "DATE(p.created_at) <= '" . mysqli_real_escape_string($this->conn, $dateTo) . "'";
        }
        $whereSql = !empty($where) ? "WHERE " . implode(" AND ", $where) : "";
        $viewSql = "SELECT p.*, c.name
                    FROM products p
                    LEFT JOIN categories c ON p.category_id = c.category_id
                    $whereSql
                    ORDER BY p.review_count DESC LIMIT 3";
        $res = mysqli_query($this->conn, $viewSql);
        $mostViewedProducts = $res ? mysqli_fetch_all($res, MYSQLI_ASSOC) : [];

        // 4. Transactions Report
        $where = [];
        if ($dateFrom !== null) {
            $where[] = "DATE(o.order_date) >= '" . mysqli_real_escape_string($this->conn, $dateFrom) . "'";
        }
        if ($dateTo !== null) {
            $where[] = "DATE(o.order_date) <= '" . mysqli_real_escape_string($this->conn, $dateTo) . "'";
        }
        $whereSql = !empty($where) ? "WHERE " . implode(" AND ", $where) : "";
        $transSql = "SELECT
                o.order_id,
                DATE(o.order_date) AS order_date,
                c.customer_name,
                p.product_name,
                o.total_amount,
                o.order_status AS status
            FROM orders o
            JOIN customers c ON o.customer_id = c.customer_id
            JOIN order_items oi ON o.order_id = oi.order_id
            JOIN products p ON oi.product_id = p.product_id
            $whereSql
            ORDER BY o.order_date DESC LIMIT 5";
        $res = mysqli_query($this->conn, $transSql);
        $transactionsReport = $res ? mysqli_fetch_all($res, MYSQLI_ASSOC) : [];

        // Total Revenue
        $where = [];
        if ($dateFrom !== null) {
            $where[] = "DATE(order_date) >= '" . mysqli_real_escape_string($this->conn, $dateFrom) . "'";
        }
        if ($dateTo !== null) {
            $where[] = "DATE(order_date) <= '" . mysqli_real_escape_string($this->conn, $dateTo) . "'";
        }
        $whereSql = !empty($where) ? "WHERE " . implode(" AND ", $where) : "";
        $revenueSql = "SELECT SUM(total_amount) as total_revenue FROM orders $whereSql";
        $res = mysqli_query($this->conn, $revenueSql);
        $row = $res ? mysqli_fetch_assoc($res) : ['total_revenue' => 0];
        $total_revenue = $row['total_revenue'] ?: 0;

        return [
            'productcount' => $productcount,
            'product_sold' => $product_sold,
            'mostViewedProducts' => $mostViewedProducts,
            'transactionsReport' => $transactionsReport,
            'totalRevenue' => $total_revenue
        ];
    }
}
