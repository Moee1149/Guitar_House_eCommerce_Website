<?php

class CustomerModel
{

    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }
}
