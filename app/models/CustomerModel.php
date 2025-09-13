<?php

class CustomerModel
{

    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getAllCustomers()
    {
        $sql = "SELECT * FROM customers";
        $res = mysqli_query($this->conn, $sql);
        return $res->fetch_all(MYSQLI_ASSOC);
    }

    public function registerNewCustomer($fname, $email, $hashedPwd, $phone, $addr)
    {
        $sql = "INSERT INTO customers (customer_name, email, password, phone,  address)
                VALUES ('$fname', '$email', '$hashedPwd', '$phone', '$addr')";
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    public function getCustomerById($user_id)
    {
        $sql = "SELECT customer_name, phone, email, address FROM customers WHERE customer_id=$user_id";
        $res = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($res);
    }

    public function updateCustomer($user_id, $fname, $phone, $addr)
    {
        $sql = "UPDATE customers SET customer_name='$fname', phone='$phone', address='$addr' WHERE customer_id=$user_id";
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    public function deleteCustomer($user_id)
    {
        $sql = "DELETE FROM customers WHERE customer_id = $user_id";
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }
}
