<?php

class UserModel
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function registerNewUser($fname, $email, $hashedPwd, $phone, $addr)
    {
        $sql = "INSERT INTO users (user_name, email, password, phone,  address)
                VALUES ('$fname', '$email', '$hashedPwd', '$phone', '$addr')";
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    public function getAllUser()
    {
        $sql = "SELECT * FROM users";
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    public function getUserById($user_id)
    {
        $sql = "SELECT user_name, password, phone, email, address FROM users WHERE user_id=$user_id";
        $res = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($res);
    }

    public function updateUser($user_id, $fname, $phone, $addr)
    {
        $sql = "UPDATE users SET user_name='$fname', phone='$phone', address='$addr' WHERE user_id=$user_id";
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    public function updateAdminPasswod($user_id, $hashedPwd)
    {
        $sql = "UPDATE users SET password='$hashedPwd' WHERE user_id=$user_id";
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    public function deleteUser($user_id)
    {
        $sql = "DELETE FROM users WHERE user_id=$user_id";
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }
}
