<?php

class DatabaseConnection
{

    protected $conn;
    protected $servername;
    protected $username;
    protected $password;
    protected $dbname;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=medaptsch;charset=utf8", "root", "");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();

        }
    }
}

?>