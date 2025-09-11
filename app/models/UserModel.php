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
        // $hashedPwdk = sha1($password); //hashing password

        if ($res->num_rows > 0) {
            $data = mysqli_fetch_assoc($res);
            // return $hashedPwd === $data['password'];
            return $password === $data['password'];
        }
        return;
    }
}
