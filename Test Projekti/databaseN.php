<?php

class DATABASE1
{
    private $hostname = "localhost";
    private $dbUser = "root";
    private $dbpassword = "";
    private $dbname = "lajme";

    public function startConnection()
    {
        try {
            $conn = new PDO("mysql:host=$this->hostname;dbname=$this->dbname", $this->dbUser, $this->dbpassword, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null;
        }
    }
}


?>