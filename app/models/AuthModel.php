<?php

class AuthModel
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function verifyCustomer($email, $password)
    {
        $stmt = $this->conn->prepare("SELECT customer_id, customer_name, email, password FROM customers WHERE email= ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $res = $stmt->get_result();
        $hashedPwd = sha1($password); //hashing password

        if ($res->num_rows > 0) {
            $data = mysqli_fetch_assoc($res);
            return [$hashedPwd === $data['password'], $data['customer_id'], $data['customer_name']];
        }
    }

    public function checkEmailAlreadyUse($email, $role = "customer")
    {
        $table = match ($role) {
            "admin" => "users",
            default => "customers",
        };
        $stmt = $this->conn->prepare("SELECT email, password FROM $table WHERE email= ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $res = $stmt->get_result();

        if ($res->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function handleCreateNewUser($fname, $email, $phone, $hashedPwd, $addr)
    {
        $sql = "INSERT INTO customers (customer_name, email, password, phone, address)
                VALUES ('$fname', '$email', '$hashedPwd','$phone', '$addr')";
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    public function handleCreateNewAdmin($fname, $email, $phone, $hashedPwd, $addr)
    {
        $sql = "INSERT INTO users (user_name, email, password, phone, address)
                VALUES ('$fname', '$email', '$hashedPwd','$phone', '$addr')";
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    public function verifyAdmin($email, $password)
    {
        $stmt = $this->conn->prepare("SELECT user_id, user_name, email, password FROM users WHERE email= ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $res = $stmt->get_result();
        $hashedPwd = sha1($password); //hashing password

        if ($res->num_rows > 0) {
            $data = mysqli_fetch_assoc($res);
            return [$hashedPwd === $data['password'], $data['user_id'], $data['user_name']];
        }
        return;
    }
}
