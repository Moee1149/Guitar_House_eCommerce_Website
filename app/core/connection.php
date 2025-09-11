<?php
class DatabaseConnection
{
    private $host; //localhost/IP(127.0.0.1)
    private $dbuser; //Default of MySQL
    private $dbpwd; //Default empty on XAMPP MySQL
    private $dbname; //Create DB on MySQL

    public function __construct($host = "mysql", $dbuser = "moee", $dbpwd = "moee1149", $dbname = "guitar_house_db")
    {
        $this->host = $host;
        $this->dbuser = $dbuser;
        $this->dbpwd = $dbpwd;
        $this->dbname = $dbname;
    }

    public function handleConnection()
    {
        $conn = new mysqli($this->host, $this->dbuser, $this->dbpwd, $this->dbname);

        if ($conn->connect_error) {
            die("Oops! Database connection failed. $conn->connect_error");
        }
        return $conn;
    }
}
