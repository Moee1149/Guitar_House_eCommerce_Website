<?php
include APP_PATH . '/core/connection.php';

class UserModel
{
    private $conn;

    public function __construct()
    {
        $database = new DatabaseConnection();
        $this->conn = $database->handleConnection();
    }

    public function verifyCustomer($email, $password)
    {
        $stmt = $this->conn->prepare("SELECT email, password FROM customers WHERE email= ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $res = $stmt->get_result();
        $hashedPwd = sha1($password); //hashing password

        if ($res->num_rows > 0) {
            $data = mysqli_fetch_assoc($res);
            return $hashedPwd === $data['password'];
        }
        return;
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
}
