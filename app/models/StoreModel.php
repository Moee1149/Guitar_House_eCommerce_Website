<?php

class StoreModel
{
    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function updateStoreProfile($user_id, $storeName, $storeAddress, $city, $state, $storePhone, $storeEmail, $storeLogo)
    {

        $sql = "INSERT INTO store (
            user_id, email, store_name, store_address, state, city, phone, store_logo
        ) VALUES (
            $user_id, '$storeEmail', '$storeName', '$storeAddress', '$state', '$city', '$storePhone', '$storeLogo'
        )
        ON DUPLICATE KEY UPDATE
            email = VALUES(email),
            store_name = VALUES(store_name),
            store_address = VALUES(store_address),
            state = VALUES(state),
            city = VALUES(city),
            phone = VALUES(phone),
            store_logo = VALUES(store_logo),
            description = VALUES(description)";

        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    public function getStoreProfile($user_id)
    {
        $sql = "SELECT * FROM store WHERE user_id = $user_id";
        $res = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($res);
    }
}
