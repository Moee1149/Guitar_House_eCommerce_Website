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
            o.status
        FROM orders o
        LEFT JOIN customers c ON o.customer_id= c.customer_id
        LEFT JOIN order_items oi ON o.order_id = oi.order_id
        GROUP BY o.order_id, c.customer_name, o.order_date, o.total_amount, o.status
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
            o.shipping_city AS shipping_city,
            o.shipping_state AS shipping_state,
            o.status
        FROM orders o
        LEFT JOIN customers c ON o.customer_id= c.customer_id
        WHERE o.order_id = $orderId
        GROUP BY o.order_id, c.customer_name, o.order_date, o.total_amount, o.status;";
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

    public function updateOrder()
    {
        //update order
    }
}
